<?php
/**
 * Team:不想重装队
 * Coding By: 姜涵
 * 本文件用于将本网站项目部署在电脑中
 *
 */
$password_ok = true;
$database_config = false;

function clear_cache($conn)
{
    while ($conn->more_results()) {
        $conn->next_result();
        $conn->use_result();
    }
}

?>
<!DOCTYPE html>
<html lang="cn">

<head>
    <meta charset="utf-8">
    <title>关注核污染展示网站安装引导教程</title>
    <link rel="stylesheet" href="../frontend/web/assets/frontend/install/js/plugin-install.js">
    <link rel="stylesheet" href="../frontend/web/assets/frontend/install/css/install-rtl.css">
    <link rel="stylesheet" href="../frontend/web/assets/frontend/install/css/install.css">
</head>

<body class="wp-core-ui">
    <p id="logo"><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment.git">关注核污染展示网站github链接</a></p>

    <?php
    if ((isset($_POST['admin_password']) && strlen($_POST['admin_password']) >= 4))
        $database_config = true;
    ?>

    <?php
    if ($database_config) {
        echo "<h1 style='color: #66ccff;'>管理员账户信息配置完成</h1>";
        include("install-sql.php");
    } else
        include("install-admin.php");
    ?>
    <?php

    if (isset($_POST["sql_password"])) {
        $conn = new mysqli($_POST["sql_ip"], $_POST["sql_account"], $_POST["sql_password"]); //, null, $_POST["sql_port"]);
    
        if ($conn->connect_error) {
            echo "<h1 style='color: #EE0000;'>数据库连接失败，请重新配置</h1>";
        } else {
            echo "<h1 style='color: #66ccff;'>数据库连接成功，正在运行建库脚本。。。</h1>";
            $sql = "DROP DATABASE IF EXISTS `" . $_POST["sql_name"] . "`;CREATE DATABASE `" . $_POST["sql_name"] . "` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;";
            if ($conn->multi_query($sql) === TRUE) {
                echo "<h1 style='color: #66ccff;'>数据库创建成功，正在新建表和数据。。。</h1>";
                $sql2 = "use " . $_POST["sql_name"] . ";";
                $filename = "../data/install.sql";
                $handle = fopen($filename, "r"); //读取二进制文件时，需要将第二个参数设置成'rb'
    
                //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
                $contents = fread($handle, filesize($filename));
                fclose($handle);
                clear_cache($conn);
                $conn->query($sql2);
                clear_cache($conn);

                $is_ok = true;

                $contents = explode(';', $contents);
                for ($i = 0; $i < count($contents); ++$i) {

                    if (ctype_space($contents[$i]) || $conn->query($contents[$i]) === TRUE) {
                        clear_cache($conn);
                    } else {
                        $is_ok = false;
                        echo $contents[$i];
                        break;
                    }
                }
                //哈希代码生成
                $password_hash = password_hash($_POST["admin_password"], PASSWORD_DEFAULT, ['cost' => 13]);
                //构造 SQL 语句
                $admin = "delete FROM `user` WHERE id=0; INSERT INTO user (id, password_hash, auth_key,username) VALUES ('0','$password_hash','nS7srBBk1qUOQvaYtVif494hdoTNSkAc','admin')";

                if ($is_ok === TRUE) {
                    if (!$conn->multi_query($admin) === TRUE)
                        $is_ok = false;
                }

                if ($is_ok === TRUE) {
                    echo "<h1 style='color: #66ccff;'>数据导入完成，正在配置local文件。。。</h1>";

                    $myfile = fopen("../common/config/main-local.php", "w");

                    $contents ="<?php
                    return [
                        'components' => [
                            'db' => [
                                'class' => 'yii\db\Connection',
                                'dsn' => 'mysql:host=" . $_POST["sql_ip"] . ";dbname=" . $_POST["sql_name"] . "',
                                'username' => '" . $_POST["sql_account"] . "',
                                'password' => '" . $_POST["sql_password"] . "',
                                'charset' => 'utf8',
                            ],
                            'mailer' => [
                                'class' => 'yii\swiftmailer\Mailer',
                                'viewPath' => '@common/mail',
                                // send all mails to a file by default. You have to set
                                // 'useFileTransport' to false and configure a transport
                                // for the mailer to send real emails.
                                'useFileTransport' => true,
                            ],
                        ],
                    ];";
                    fwrite($myfile, $contents);
                    fclose($myfile);
                    $myfile = fopen("../frontend/config/main-local.php", "w");
                    $contents = "<?php \n \$config = [ \n
    'components' => [  \n
        'request' => [  \n
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation \n
            'cookieValidationKey' => 'lXfAJ_cFiUH-Ze0SsHpXrpmwmn_sAonW', \n ], \n], \n];   return \$config;";
                    fwrite($myfile, $contents);
                    fclose($myfile);
                    
                    if ($is_ok === TRUE) {
                        echo "<h1 style='color: #66ccff;'>配置local文件完成，正在后台启动爬虫程序。。。</h1>";
                        shell_exec("pip install pymysql bs4");
                        $cmd = "python ../crawler.py > /dev/null &";
                        unset($output);
                        $output = shell_exec($cmd);
                        //shell_exec("../init.bat");
                        //shell_exec("cd ..");
                        //shell_exec("php yii migrate");
                        echo "<h1 style='color: #99DD00;'>如果上述操作没有产生错误信息，那么您的安装已经完成，可以退出此界面了，
                之后进入前（frontend/web/index.php）或后台（backend/web/index.php） 即可正常使用此网站</h1>";
                    } else {
                        echo "<h1 style='color: #EE0000;'>表后台启动爬虫程序失败，请检查您是否已安装python3，并已经设置好了python的PATH使之在当前根目录下可以运行</h1>";
                    }
                } else
                    echo "<h1 style='color: #EE0000;'>表格创建和数据导入失败，请重新配置，或检查../data/install.sql的正确性</h1>";
            } else
                echo "<h1 style='color: #EE0000;'>数据库创建失败，请重新配置</h1>";
        }

    }

    ?>

</body>

</html>