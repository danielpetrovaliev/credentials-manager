<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Project belongs to Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
    	// belongsTo(RelatedModel, foreignKey = users_id, keyOnRelatedModel = id)
    	return $this->belongsToMany(User::class, 'projects_users');
    }
}
