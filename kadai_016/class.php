<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            public $name;
            public $price;

            // コンストラクタを定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // 価格を出力するメソッド
            public function show_price() {
                echo "Price:" . $this->price . "<br>";
            }
        }

        // Animalクラスを定義
        class Animal {
            // プロパティを定義
            public $name;
            public $height;
            public $weight;

            // コンストラクタを定義
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // 身長を出力するメソッド
            public function show_height() {
                echo "Height: " . $this->height . "cm<br>";
            }
        }

        // インスタンスを作成
        $strawberry = new Food("Apple", 150);
        $dog = new Animal("Dog", 50, 20);

        // インスタンスの情報を出力
        echo "<pre>";
        print_r($strawberry);
        print_r($dog);

        // メソッドを実行
        $strawberry->show_price();
        $dog->show_height();
        ?>
    </p>
</body>
</html>