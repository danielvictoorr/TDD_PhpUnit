<?php

namespace OrderBundle\Repository;

use MyFramework\DataBase\ORM;

use OrderBundle\Entity\Customer;

class CustomerRepository extends ORM
{
    /**
     * @param $customerID
     * @return Customer
     */
    public function findByID($customerID)
    {

        /**
         * $customerData = "SELECT name,id FROM customers WHERE id = X";
         * $customer = new Customer( $customerData['name'], $customerData['id'] );
         * retur $customer
         */
        return parent::findByID($customerID);
    }
}