<?php

namespace NainLobato\CrossDatabase;

use NainLobato\CrossDatabase\Query\Grammars\SqlServerGrammar as SqlServerQueryGrammar;
use Illuminate\Database\SqlServerConnection as IlluminateSqlServerConnection;

class SqlServerConnection extends IlluminateSqlServerConnection implements CanCrossDatabaseShazaamInterface
{
    /**
     * Get the default query grammar instance.
     *
     * @return \Illuminate\Database\Query\Grammars\SqlServerGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new SqlServerQueryGrammar());
    }
}
