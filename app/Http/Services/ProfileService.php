<?php

namespace App\Http\Services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\User;
use App\Profile;
use App\Http\Core\ServiceResponse;
use Illuminate\Support\Facades\DB;

/**
 * Description of ProfileService
 *
 * @author macorin
 */
class ProfileService {

    public function updateProfile($user, $profile) {
        try {
            DB::beginTransaction();
            User::find($user['id'])->update(['name' => $user['name']]);
            
            $profileDb = Profile::firstOrNew(['user_id' => $user['id']]);
            $profileDb->update($profile);
            $profileDb->save();
            DB::commit();
            return new ServiceResponse(trans('messages.save_successfull'));
        } catch (Exception $ex) {
        } catch (\Illuminate\Database\QueryException $ex) {
        }
        DB::rollback();
        return new ServiceResponse($ex->getMessage(), true);
    }

}
