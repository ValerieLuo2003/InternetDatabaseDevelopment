<?php
/**
 * Team:不想重装队
 * Coding By: 姜涵
 * 安装引导程序的一个界面，用于设置管理员账户
 */

global $password_ok;
global $database_config;
?>
<h1>关注核污染展示网站安装引导教程:</h1>
<p>本系统在yii2的框架基础上开发，你可以在接下来的
    配置中完成对于数据库的配置，并且选择导入的数据脚本，之后就可以开始使用我们的系统。</p>
<h2>环境需求：</h2>
<p>配置本系统需要的最低环境要求：</p>
<p>PHP >= 5.6</p>
<p>MySQL >= 7.0</p>
<p>python3</p>
<p>最好拥有Apache，现代浏览器等常用工具</p>
<h2>认真填写并记住以下信息</h2>
<p>如果您填写错误或者忘记了以下信息可以重新安装或者直接在数据库中更改，不过请提前备份数据库。</p>
<form id="setup" method="post" novalidate="novalidate">
    <table class="form-table" role="presentation">
        <tr>
            <th scope="row"><label for="weblog_title">账户</label></th>
            <td><input name="admin_account" type="text" id="weblog_title" size="25" value="0" readonly="readonly" />
                <p>网站的后台超级管理员账号，id为0，拥有后台管理的最高权限，不可编辑</p>
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="user_login">密码</label></th>
            <td>
                <input name="admin_password" type="password" id="user_login" size="25"
                    value="<?= isset($_POST['admin_password']) ? $_POST['admin_password'] : '' ?>" aria-required="true"
                    oninput="<?php
                    if (isset($_POST['admin_password'])) {
                        if (strlen($_POST['admin_password']) < 4)
                            $password_ok = false;
                        else
                            $password_ok = true;
                    }
                    ?>" />
                <?php
                if ($password_ok == true || $password_ok === null)
                    echo "<p>建议使用强度较高的密码，密码必须大于等于4位，否则无法登陆网站</p>";
                else
                    echo "<p style='color: red;'>请输入长度足够密码(4位及以上)</p>"
                        ?>

                </td>
            </tr>
        </table>

        <p class="step"><input type="submit" id='submit' class="button button-large" value="确定当前设置" /></p>
    </form>