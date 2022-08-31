<?php
class A
{
    protected string $test1 = "successful";

    public function run(): void
    {
        require __DIR__ . "/file2.php";
    }

    private function test2(): string
    {
        return "successful";
    }
}

$obj = new A();
$obj->run();
