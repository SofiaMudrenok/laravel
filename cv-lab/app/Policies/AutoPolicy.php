<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Auto;
use Illuminate\Auth\Access\Response;

class AutoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Employee $auto): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(?User $user): bool
    {
        if (
            $user->role != 'guest'
        ) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Auto $auto): bool
    {
        if (
            $user->id === $auto->superior_id ||
            $user->role === "editor" ||
            $user->role === "superAdmin"
        ) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Auto $auto): bool
    {
        if (
            $user->id == $auto->superior_id ||
            $user->role == "superAdmin"
        ) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Auto $auto): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Auto $auto): bool
    {
        return false;
    }
}
