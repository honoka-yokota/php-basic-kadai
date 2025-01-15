<body>
  <p>
    <?php
    //クラスを定義する
    class Food
    {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義する
      public function showPrice()
      {
        echo $this->price . '<br>';
      }
    }

    //インスタンス化する
    $food = new Food('potato', 250);
    // インスタンス$foodの価格を出力する
    print_r($food);
    $food->showPrice();
    

    //クラスを定義する
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義する
      public function showHeight()
      {
        echo $this->height . '<br>';
      }
    }

    //インスタンス化する
    $animal = new Animal('dog', 60, 5000);
    // インスタンス$animalの高さを出力する
    print_r($animal);
    $animal->showheight();

    ?>
  </p>
</body>

</html>
