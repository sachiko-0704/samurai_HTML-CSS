{"filter":false,"title":"class.php","tooltip":"/class.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":1,"column":0},"end":{"row":27,"column":2},"action":"insert","lines":["# Carというクラスを作成する","class Car","{","    static $class_name = \"Car\";","","    function __construct($name=\"test\"){","        $this->name = $name;","    }","","    public function show() {","        print($this->name.\"\\n\");","    }","}","# Carクラスのインスタンスを作成する","$car = new Car();","","# Carのインスタンス変数nameにセダンという文字列を格納する","$car->name = \"セダン\";","","# Carのメソッドであるshow()を実行する","$car->show();","# ターミナルにはセダンと表示される","","# Carクラス内にあるクラス変数$class_nameをターミナルに表示する","print(Car::$class_name.\\n\");","# ターミナルにはCarと表示される","?>"],"id":2}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1605071536436,"hash":"460c6cd7885e23a68d4288e0180d391629c3b1e5"}