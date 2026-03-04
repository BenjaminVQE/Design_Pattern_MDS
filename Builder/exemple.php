<?php

class Computer
{
    public string $cpu;
    public int $ram;
    public int $storage;
    public ?string $gpu = null;
    public bool $wifi = false;
}

class ComputerBuilder
{
    private Computer $computer;

    public function __construct()
    {
        $this->computer = new Computer();
    }

    public function setCpu(string $cpu): self
    {
        $this->computer->cpu = $cpu;
        return $this;
    }

    public function setRam(int $ram): self
    {
        $this->computer->ram = $ram;
        return $this;
    }

    public function setStorage(int $storage): self
    {
        $this->computer->storage = $storage;
        return $this;
    }

    public function setGpu(string $gpu): self
    {
        $this->computer->gpu = $gpu;
        return $this;
    }

    public function enableWifi(): self
    {
        $this->computer->wifi = true;
        return $this;
    }

    public function build(): Computer
    {
        return $this->computer;
    }
}

$computer = (new ComputerBuilder())
    ->setCpu("i7")
    ->setRam(32)
    ->setStorage(1000)
    ->setGpu("RTX 4080")
    ->enableWifi()
    ->build();
