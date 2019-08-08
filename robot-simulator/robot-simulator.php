<?php

class Robot{
    const DIRECTION_NORTH = 0;
    const DIRECTION_EAST = 1;
    const DIRECTION_SOUTH = 2;
    const DIRECTION_WEST = 3;

    public function __construct(array $position = [], string $direction){
        $this->position = $position;
        $this->direction = $direction;
    }

    public function instructions(string $instructions){
        for ($i=0; $i<strlen($instructions); $i++){
            $curInstruction = $instructions[$i];
            switch ($curInstruction) {
                case 'R':
                    $this->turnRight();
                    break;
                case 'L':
                    $this->turnLeft();
                    break;
                case 'A':
                    $this->advance();
                    break;
                default:
                    throw new InvalidArgumentException("Contains non RLA character");
            }
        }
    }

    public function turnLeft(){
        $this->direction--;
        if ($this->direction < 0) {
            $this->direction = 3;
        }
        return $this;
    }

    public function turnRight(){
        $this->direction = ($this->direction + 1) % 4;
        return $this;
    }

    public function advance(){
        switch ($this->direction){
            case Robot::DIRECTION_NORTH:
                $this->position[1]++;
                return $this;
            case Robot::DIRECTION_EAST:
                $this->position[0]++;
                return $this;
            case Robot::DIRECTION_SOUTH:
                $this->position[1]--;
                return $this;
            case Robot::DIRECTION_WEST:
                $this->position[0]--;
                return $this;
        }
    }

}
