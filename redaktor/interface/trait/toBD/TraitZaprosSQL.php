<?php
namespace class\redaktor\interface\trait\toBD;

trait TraitZaprosSQL
{
    public function zaprosSQL($zapros)
     {
        return \class\redaktor\DatabaseQuery::createDbQuery()->dbQuery($zapros);
     }
}
