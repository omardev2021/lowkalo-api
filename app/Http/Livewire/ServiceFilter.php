<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServiceFilter extends Component
{
    public $showModal =false;

    public $programs = true;
    public $programs1 = true;

    public $programs2 = true;
    public $programs3 = true;
    public $programs4 = true;
    public $programs5 = true;
    public $programs6 = true;
    public $programs7 = true;
    public $programs8 = true;
    public $programs9 = true;
    public $programs10 = true;
    public $programs11 = true;
    public $programs12 = true;
    public $programs13 = true;


    public $setup= true;

    public $setup1= true;
    public $setup2= true;
    public $setup3= true;
    public $setup4= true;
    public $setup5= true;


    public $target= true;

    public $target1= true;
    public $target2= true;
    public $target3= true;
    public $target4= true;



    public $member= true;

    public $member1= true;
    public $member2= true;
    public $member3= true;
    public $member4= true;
    public $member5= true;
    public $member6= true;


    public $identifier= true;

    public $identifier1= true;
    public $identifier2= true;
    public $identifier3= true;
    public $identifier4= true;
    public $identifier5= true;


    public $channel= true;

    public $channel1= true;
    public $channel2= true;
    public $channel3= true;

    public $com= true;

    public $com1= true;
    public $com2= true;
    public $com3= true;
    public $com4= true;
    public $com5= true;
    public $com6= true;
    public $com7= true;
    public $com8= true;
    public $com9= true;
    public $com10= true;
    public $com11= true;
    public $com12= true;
    public $com13= true;

    public $lang= true;
    public $lang1= true;
    public $lang2= true;

    public $link= true;

    public $link1= true;
    public $link2= true;
    public $link3= true;
    public $link4= true;
    public $link5= true;
    public $link6= true;
    public $link7= true;
    public $link8= true;
    public $link9= true;
    public $link10= true;

    public $loc1= true;
    public $loc2= true;
    public $customers= true;


    public $report= true;
    public $price= true;
    public $rev= true;




    public $cus= true;



    public $first= true;
    public $second= true;
    public $third= true;


    public $brand1 = true;
    public $brand2 = true;
    public $brand3 = true;
    public $brand4 = true;
    public $brand5 = true;
    public $brand6 = true;
    public $brand7 = true;
    public $brand8 = true;
    public $brand9 = true;

    public function control() {
        $this->showModal = !$this->showModal;
    }

    public function reser_filters() {
        $this->programs = true;
        $this->setup= true;
        $this->target= true;
        $this->member= true;
        $this->identifier= true;
        $this->channel= true;
        $this->customers= true;


        $this->report= true;
        $this->price= true;
        $this->rev= true;
        $this->com= true;
        $this->lang= true;
        $this->link= true;
    }

    public function render()
    {
        if ($this->loc1 && ($this->programs1 || $this->programs2 || $this->programs3 || $this->programs4) &&  ($this->setup1|| $this->setup2|| $this->setup3)&& ($this->target1|| $this->target2|| $this->target3|| $this->target4)&& ($this->member1|| $this->member2|| $this->member3)&& ($this->identifier1|| $this->identifier2|| $this->identifier3)&& ($this->channel2|| $this->channel3)) {
            $this->brand1=true;
        }else{
            $this->brand1=false;
        }

        if ($this->loc1 && ($this->programs1 || $this->programs2 || $this->programs3) && ($this->setup1|| $this->setup4) && ($this->target1|| $this->target2)&& $this->identifier4) {
        $this->brand2=true;
    }else{
        $this->brand2=false;
    }

        if ($this->loc1 && ($this->programs1|| $this->programs2 || $this->programs5 || $this->programs6 || $this->programs4 || $this->programs7 || $this->programs8|| $this->programs9|| $this->programs10|| $this->programs11|| $this->programs12|| $this->programs13)&& $this->target1&& ($this->member2|| $this->member4)&& $this->identifier4&& ($this->channel1|| $this->channel2|| $this->channel3)&& ($this->com1|| $this->com2|| $this->com3|| $this->com4|| $this->com5|| $this->com6) ){
            $this->brand3=true;
        } else {
            $this->brand3=false;
        }

        if ($this->loc1 &&$this->programs1&& $this->setup1&& $this->target1&& $this->channel2&& ($this->com7|| $this->com8|| $this->com9|| $this->com10)&& ($this->lang1|| $this->lang2)&& ($this->link1|| $this->link2|| $this->link3|| $this->link4|| $this->link5)&& $this->identifier5) {
            $this->brand4=true;
        } else {
            $this->brand4=false;
        }

        if ($this->loc1 &&($this->programs1|| $this->programs5)&& ($this->setup1|| $this->setup5)&& $this->target1&& $this->identifier5&& $this->channel2&& ($this->com7|| $this->com8|| $this->com9|| $this->com10)&& ($this->lang1|| $this->lang2)&& ($this->link1|| $this->link2|| $this->link4)) {
            $this->brand5=true;
        } else {
            $this->brand5=false;
        }

        if ($this->loc1 &&$this->programs1&& $this->setup1&& $this->target1&& $this->member5&& ($this->channel1|| $this->channel2)&& ($this->com11|| $this->com12|| $this->com10)&& ($this->lang1|| $this->lang2)&& $this->link1&& $this->identifier5) {
            $this->brand6=true;
        } else {
            $this->brand6=false;
        }

        if ($this->loc1 &&$this->programs1&& $this->setup2&& $this->target1&& $this->member6&& ($this->channel1|| $this->channel2)&& ($this->com12|| $this->com13)&& ($this->lang1|| $this->lang2)&& ($this->link1|| $this->link6|| $this->link7|| $this->link8|| $this->link9|| $this->link10)&& $this->identifier5) {
            $this->brand7=true;
        } else {
            $this->brand7=false;
        }

        if ($this->loc1 &&($this->programs1 || $this->programs5)&& $this->setup1&& $this->target1&& $this->identifier4&& ($this->channel1|| $this->channel2)&& ($this->com7|| $this->com11|| $this->com9|| $this->com10)&& ($this->lang1|| $this->lang2)&& $this->link1) {
            $this->brand8=true;
        } else {
            $this->brand8=false;
        }

        if ($this->loc1 && ($this->programs1 || $this->programs5) && $this->target1&& ($this->identifier2|| $this->identifier5)&& $this->channel2) {
            $this->brand9=true;
        } else {
            $this->brand9=false;
        }
        return view('livewire.service-filter');
    }
}
