<?php

namespace NainLobato\CrossDatabase\Eloquent;

use NainLobato\CrossDatabase\Eloquent\Concerns\QueriesRelationships as CrossDatabaseQueriesRelationships;
use Illuminate\Database\Eloquent\Builder as IlluminateEloquentBuilder;
use Illuminate\Database\Eloquent\Concerns\QueriesRelationships as IlluminateEloquentQueriesRelationships;

class Builder extends IlluminateEloquentBuilder
{
    use IlluminateEloquentQueriesRelationships, CrossDatabaseQueriesRelationships {
        CrossDatabaseQueriesRelationships::addHasWhere insteadof IlluminateEloquentQueriesRelationships;
        CrossDatabaseQueriesRelationships::withCount insteadof IlluminateEloquentQueriesRelationships;
    }
}
