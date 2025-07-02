<?php

class A {
    final public function test() {
        echo "This is a final method\n";
    }
}

class B extends A {
    // ❌ Error: Cannot override final method A::test()
    // public function test() {
    //     echo "Trying to override\n";
    // }
}

// এখানে B class A এর test() method কে override করলে error দিবে, কারণ test() method final

?>