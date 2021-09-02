<?php
/*
SImplified CMS 2 ユーザ情報定義ファイル

左辺がユーザID、右辺がパスワードです。
例1）ユーザID「arakawa」のパスワードを「okazakicity」に設定する場合は、
"arakawa" => "okazakicity",
に変更します。

例2）複数アカウントを用意することもできます。
"arakawa" => "okazakicity",
"suzuki" => "aichipref",
のように書けば、ユーザID「arakawa」「suzuki」のどちらでもログインできます。
*/

$user = [
	"admin" => "password",
];