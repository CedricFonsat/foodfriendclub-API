<?php

namespace App\Controller\Admin;

use App\Entity\DataMatch;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DataMatchCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DataMatch::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
