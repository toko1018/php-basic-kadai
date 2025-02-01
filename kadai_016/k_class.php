<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題</title>
</head>

<body> 
    <p>
        <?php
        // Foodクラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceを出力するメソッド
            public function show_price() {
                echo $this->price;
            }
            
        }

        // インスタンス化する
        $food = new Food('potato', 250);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);

        // priceを出力
        echo "<br>";
        $food->show_price();
        ?>
    </p>
    
    <p>
        <?php
        // Animalクラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightを出力するメソッド
            public function show_height() {
                echo $this->height;
            }
        }

        // インスタンス化する
        $animal= new Animal('dog', 60, 5000);

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);

        // heightを出力
        echo "<br>";
        $animal->show_height();
        ?>
    </p>

    

    
</body>

</html>