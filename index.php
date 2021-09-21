<?php
//    public function testPadLeft()
//    {
//        $this->assertEquals(
//            '-=-=-James',
//            Str::padLeft('James', 10, '-=')
//        );
//
//        $this->assertEquals(
//            '     James',
//            Str::padLeft('James', 10)
//        );
//    }
    function padLeft(string $value, int $length, string $pad = ' '): string
    {
        return str_pad($value, $length, $pad, STR_PAD_LEFT);
    }
echo padleft();
