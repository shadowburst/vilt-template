<?php

namespace App\Traits;

use App\Models\Team;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasTeams
{
    /**
     * Boot the HasTeams trait for a class.
     */
    public static function bootHasTeams(): void {}

    /**
     * Initialize the HasTeams trait for an instance.
     */
    public function initializeHasTeams(): void {}

    /**
     * Gets the model's current team.
     */
    public function currentTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Gets the model's teams.
     */
    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }
}
