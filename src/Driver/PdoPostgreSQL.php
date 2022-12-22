<?php

namespace Pullay\Database\Driver;

use PDO;

use function sprintf;

class PdoPostgreSQL extends BasePdo
{
    public static function connection(string $host, string $dbname, string $user, string $password): self
    {
        return new self(sprintf('pgsql:host=%1$s;dbname=%2$s', $host, $dbname), $user, $password, [
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

}
