<?php

interface ServiceI {
    
}

class Service implements ServiceI
{
    public function getName(): string
    {
        return 'dummy_service';
    }
}

class Dummy
{
    /**
     * @var ServiceI[]
     */
    private $services;

    /**
     * @param ServiceI[] $services
     */
    public function __construct(array $services)
    {
        $this->services = $services;
    }

    /**
     * @return ServiceI[]
     */
    public function getServices(): array
    {
        return $this->services;
    }
}

$x = new Dummy([new Service()]);
foreach ($x->getServices() as $service) {
    $service->getName();
}
