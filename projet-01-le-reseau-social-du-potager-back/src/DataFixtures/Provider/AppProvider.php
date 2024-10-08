<?php

namespace App\DataFixtures\Provider;

class AppProvider
{

    /**
     * available roles
     * @var array
     */
    private $roles = [
        ["ROLE_USER"],
        ["ROLE_ADMIN"]
    ];
    /**
     * available cities
     * @var array
     */
    private $cities = [
        "paris",
        "brest",
        "marseille",
        "annecy",
        "nantes",
        "lyon",
        "bordeaux",
        "tarbes",
        "cauterets",
        "orleans",
        "limay"
    ];


    /**
     * Get a role
     */
    public function role()
    {
        return $this->roles[array_rand($this->roles)];
    }
    /**
     * Get a city
     */
    public function cities()
    {
        return $this->cities[array_rand($this->cities)];
    }
}