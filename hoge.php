<?php
// Class, Object
// Class データと関数をセットで持っている変数
//
class Dog
{
    public $name = 'Hachi';

    public function bark() {
        echo "ワン";
    }

    public function nextLine() {
        echo "\n";
    }
}

$a = new Dog(); // オブジェクトを生成する

$a->bark();
$a->nextLine();

echo $a->name;
$a->nextLine();
