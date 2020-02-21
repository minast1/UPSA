<?php

namespace App\Policies;

use App\User;
use App\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any course.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the course.
     *
     * @param  App\User  $user
     * @param  App\Course  $course
     * @return bool
     */
    public function view(User $user, Course $course)
    {
        return false;
    }

    /**
     * Determine whether the user can create a course.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the course.
     *
     * @param  App\User  $user
     * @param  App\Course  $course
     * @return bool
     */
    public function update(User $user, Course $course)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the course.
     *
     * @param  App\User  $user
     * @param  App\Course  $course
     * @return bool
     */
    public function delete(User $user, Course $course)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the course.
     *
     * @param  App\User  $user
     * @param  App\Course  $course
     * @return bool
     */
    public function restore(User $user, Course $course)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the course.
     *
     * @param  App\User  $user
     * @param  App\Course  $course
     * @return bool
     */
    public function forceDelete(User $user, Course $course)
    {
        return false;
    }
}
