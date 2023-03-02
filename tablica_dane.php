    <?php


    class tablica_dane{
        private int $wymiar;

        public function __construct(int $wymiar){
            $this->wymiar = $wymiar;
        }

        public function calculate(): array
        {
            $tablicaDane = [];

            for($x=1; $x<=$this->wymiar; $x++){
                for($y=1; $y<=$this->wymiar; $y++){
                    $tablicaDane[$x][$y] = $y*$x;
                }
            }

            return $tablicaDane;
        }

    }
