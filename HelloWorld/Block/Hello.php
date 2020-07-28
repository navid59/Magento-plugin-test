<?php
    namespace Navid\HelloWorld\Block;
    use Magento\Framework\View\Element\Template;
    use Navid\HelloWorld\Plugin\Foo;

    class Hello extends Template
    {
        public function __construct(Template\Context $context, array $data = [])
        {
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
    }
