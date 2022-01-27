<?php

namespace App\Controller\Admin;

use App\Entity\Commerce;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommerceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commerce::class;
    }


}
