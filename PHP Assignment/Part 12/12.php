<?php
// Create a class that stores integers. Implement Bubble Sort, Selection Sort, and Insertion Sort as separate methods

class Integer
{
    public $integer;

    public function bubbleSort()
    {
        echo "<pre>";
        for ($i = 0; $i < count($this->integer); $i++) {
            for ($j = $i + 1; $j < count($this->integer); $j++) {
                if ($this->integer[$i] > $this->integer[$j]) {
                    $temp = $this->integer[$j];
                    $this->integer[$j] = $this->integer[$i];
                    $this->integer[$i] = $temp;
                }
            }
        }
        print_r($this->integer);
    }

    public function selectionSort()
    {
        echo "<pre>";

        for ($j = 0; $j < count($this->integer); $j++) {
            $min = $this->integer[$j];
            $index = $j;

            for ($i = $j + 1; $i < count($this->integer); $i++) {
                if ($this->integer[$i] < $min) {
                    $min = $this->integer[$i];
                    $index = $i;
                }
            }
            $temp = $this->integer[$index];
            $this->integer[$index] = $this->integer[$j];
            $this->integer[$j] = $temp;
        }

        // echo $min . "<br>" . $index;
        print_r($this->integer);
    }
}

$integer = new Integer();
$integer->integer = [10, 8, 5, 9, 4, 3, 6];
// $integer -> bubbleSort();
$integer->selectionSort();
