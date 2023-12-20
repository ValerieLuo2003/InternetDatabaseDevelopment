
# -*- coding: utf-8 -*-
import pymysql
import requests
import re
import bs4
from bs4 import BeautifulSoup

# url = 'https://sou.chinanews.com.cn/search.do?q=%E4%BF%84%E4%B9%8C'
url = 'https://sou.chinanews.com.cn/search.do?q=%E6%A0%B8%E6%B1%A1%E6%B0%B4'


def crawl(sub_url):
    r = requests.get(sub_url)
    r.raise_for_status()

    # 创建一个BeautifulSoup解析对象
    soup = BeautifulSoup(r.text, 'html.parser')

    texts = [each.get_text().strip() for each in soup.find_all(name='li', attrs={'class': 'news_title'})]

    print(texts)
    times = [each.get_text()[-40:].strip() for each in soup.find_all(name='li', attrs={'class': 'news_other'})]
    urls = [item.find('a')['href'] for item in soup.find_all(name='li', attrs={'class': 'news_title'})]
    print(times)
    return texts, times, urls


def updateDB():
    conn = pymysql.connect(host='127.0.0.1'  # 连接名称，默认127.0.0.1
                           , user='root'  # 用户名
                           , passwd='123456'  # 密码
                           , port=3306  # 端口，默认为3306
                           , db='yii2advanced'  # 数据库名称
                           , charset='utf8'  # 字符编码
                           )
    cur = conn.cursor()  # 生成游标对象
    sql = "DELETE FROM `news`"
    print(sql)
    cur.execute(sql)  # 执行SQL语句
    conn.commit()

    num_id = 1
    for j in range(1, 11):
        sub_url = url + "&start=" + str(j * 10)
        texts, times, urls = crawl(sub_url)

        for i in range(min(100, len(texts))):
            sql = "INSERT INTO `news` VALUES ('%s', '%s','%s', '%d')" % (texts[i], times[i], urls[i], num_id)
            num_id += 1
            print(sql)
            cur.execute(sql)  # 执行SQL语句
        sql = "select * from `news` "  # SQL语句
        cur.execute(sql)  # 执行SQL语句
        data = cur.fetchall()  # 通过fetchall方法获得数据
        for i in data[:2]:  # 打印输出前2条数据
            print(i)
        # 提交之前的操作，如果之前已经执行多次的execute，那么就都进行提交
        conn.commit()
    cur.close()  # 关闭游标
    conn.close()  # 关闭连接


import time


def sleep_time(hour, minute, sec):
    return hour * 3600 + minute * 60 + sec


def loop_func(hour, minute, sec):
    # 每隔一段时间执行func函数
    timeval = sleep_time(hour, minute, sec)
    while True:
        updateDB()
        time.sleep(timeval)


if __name__ == '__main__':
    loop_func(0, 10, 0)