<?php
    header('Content-Type:text/html;charset=utf-8');
    //��������
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PWD','shenbiao');
    define('DB_NAME','gouwu');
    //��һ��������MYSQL ������
    $conn = @mysql_connect(DB_HOST,DB_USER,DB_PWD) or die('���ݿ�����ʧ�ܣ�������Ϣ��'.mysql_error());
    //�ڶ�����ѡ��ָ�������ݿ⣬�����ַ���
    mysql_select_db(DB_NAME) or die('���ݿ���󣬴�����Ϣ��'.mysql_error());
    mysql_query('SET NAMES UTF8') or die('�ַ������ô���'.mysql_error());
?>