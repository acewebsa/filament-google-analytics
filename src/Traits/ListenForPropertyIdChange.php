<?php

namespace BezhanSalleh\FilamentGoogleAnalytics\Traits;

trait ListenForPropertyIdChange
{
    public $propertyId = null; // New property for propertyId
    protected $listeners = ['updatePropertyId' => 'refreshChart'];
    public function mount($propertyId = null): void
    {
        $this->propertyId = $propertyId;
    }
    public function refreshChart($params)
    {
        $this->propertyId = $params['propertyId'];
        $this->render();
    }
}
