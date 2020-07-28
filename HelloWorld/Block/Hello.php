<?php
    namespace Navid\HelloWorld\Block;
    use Magento\Framework\View\Element\Template;
    use Navid\HelloWorld\Plugin\Foo;
    use Navid\HelloWorld\Plugin\Audi;
    use Navid\HelloWorld\Plugin\Logan;
    use Navid\HelloWorld\Plugin\Volvo;


    class Hello extends Template
    {
        /**
         * @var Navid\HelloWorld\Plugin\Volvo
         */
        protected $volvo;
        public function __construct(
            Template\Context $context,
            \Navid\HelloWorld\Plugin\Logan $logan,
            \Navid\HelloWorld\Plugin\Volvo $volvo,
            array $data = [])
        {
            $this->logan = $logan;
            $this->volvo = $volvo;
            parent::__construct($context, $data);
        }

        public function getText() {
            return "Hello World, for navid. Success in new job position";
        }

        /**
         * @return mixed
         */
        public function getOopTest() {
            return Foo::fooTest();
        }

        public function getAudi() {
            return "Audi Method";
        }

        public function getLogan() {
            $this->logan->name = "Sandero";
            return $this->logan->intro();
        }

        public function getVolvo() {
//            $this->volvo->name = "Golf";
            return $this->volvo->intro();
        }
    }
