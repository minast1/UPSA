<?php

namespace App\Policies;

use App\User;
use App\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any student.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the student.
     *
     * @param  App\User  $user
     * @param  App\Student  $student
     * @return bool
     */
    public function view(User $user, Student $student)
    {
        return false;
    }

    /**
     * Determine whether the user can create a student.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the student.
     *
     * @param  App\User  $user
     * @param  App\Student  $student
     * @return bool
     */
    public function update(User $user, Student $student)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the student.
     *
     * @param  App\User  $user
     * @param  App\Student  $student
     * @return bool
     */
    public function delete(User $user, Student $student)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the student.
     *
     * @param  App\User  $user
     * @param  App\Student  $student
     * @return bool
     */
    public function restore(User $user, Student $student)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the student.
     *
     * @param  App\User  $user
     * @param  App\Student  $student
     * @return bool
     */
    public function forceDelete(User $user, Student $student)
    {
        return false;
    }
}
