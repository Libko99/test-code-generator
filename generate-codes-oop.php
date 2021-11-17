<?php
/*
Vytvorenie classy pre generovanie kodu - OOP
*/
class GenerateCode
{
    private function generateRandomString($value)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $value; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function generateRandomNumber($value)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $value; $i++) {
            $randomString .= $characters[rand(0, $charactersLength)];
        }
        return $randomString;
    }

    private function generateRandomCode($value)
    {
        $str = $this->generateRandomString($value);
        $str .= $this->generateRandomNumber($value);
        return $str;
    }

    public function generateRandomCodes($value)
    {
        $arr = [];
        while (1) {
            $str = $this->generateRandomCode($value);
            $arr[$str] = $str;
            if (count($arr) >= 500) break;
        }

        $this->writeToFile($arr);
    }

    private function writeToFile($data)
    {
        $file = 'codes.txt';
        $data = json_encode($data);
        file_put_contents($file, $data);
    }
}

/*
Pomocny vypis pre overenie funkcnosti kodu
*/
// $gen_code = new GenerateCode();
// $new3 = $gen_code->generateRandomCodes(3);
// var_dump ($new3);