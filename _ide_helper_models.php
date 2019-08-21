<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $job_title
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ChangeLog[] $changeLog
 * @property-read int|null $change_log_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App{
/**
 * App\ChangeLog
 *
 * @property int $id
 * @property int $admin_id
 * @property string|null $vendor_service
 * @property string|null $package_gallery
 * @property string|null $table_name
 * @property int|null $table_id
 * @property string|null $message
 * @property string|null $action
 * @property string|null $order_action
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Admin $admin
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog wherePackageGallery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ChangeLog whereVendorService($value)
 */
	class ChangeLog extends \Eloquent {}
}

namespace App{
/**
 * App\CompletedQuery
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $category_id
 * @property int|null $vendor_id
 * @property int|null $product_id
 * @property int|null $tag_id
 * @property string|null $quantity
 * @property string|null $message
 * @property string|null $event_date
 * @property string|null $shift
 * @property float $total
 * @property float $advance
 * @property float $discount
 * @property float $payment
 * @property string|null $expiry_date
 * @property string|null $expiry_time
 * @property string|null $status
 * @property int $is_available
 * @property int $is_open
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereEventDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereExpiryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompletedQuery whereVendorId($value)
 */
	class CompletedQuery extends \Eloquent {}
}

namespace App{
/**
 * App\EventCoordinator
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $messbody
 * @property int $is_opened
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator whereIsOpened($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator whereMessbody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventCoordinator whereUpdatedAt($value)
 */
	class EventCoordinator extends \Eloquent {}
}

namespace App{
/**
 * App\ExpireQuery
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $category_id
 * @property int|null $vendor_id
 * @property int|null $product_id
 * @property int|null $tag_id
 * @property string|null $unit
 * @property string|null $quantity
 * @property string|null $admin_message
 * @property string|null $message
 * @property string|null $event_date
 * @property string|null $shift
 * @property float $total
 * @property float $advance
 * @property float $discount
 * @property float $payment
 * @property string|null $expiry_date
 * @property string|null $expiry_time
 * @property string|null $status
 * @property int $is_available
 * @property int $is_open
 * @property int $in_cart
 * @property int $submit_id
 * @property int $queue_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory|null $catagory
 * @property-read \App\Models\packages $package
 * @property-read \App\Models\products|null $product
 * @property-read \App\Tag|null $tag
 * @property-read \App\User $user
 * @property-read \App\Models\vendors|null $vendors
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereAdminMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereEventDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereExpiryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereInCart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereQueueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereSubmitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ExpireQuery whereVendorId($value)
 */
	class ExpireQuery extends \Eloquent {}
}

namespace App{
/**
 * App\invoice
 *
 * @property int $id
 * @property string|null $invoice_id
 * @property string|null $user_id
 * @property string|null $submit_id
 * @property int|null $sslorder_id
 * @property int $query_id
 * @property string $paid_amount
 * @property string|null $payment_type
 * @property string|null $transaction_id
 * @property int|null $valid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Query $tag
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereQueryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereSslorderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereSubmitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\invoice whereValid($value)
 */
	class invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\address
 *
 * @property int $id
 * @property int $user_id
 * @property string $fname
 * @property string $lname
 * @property string|null $company
 * @property string $line1
 * @property string|null $line2
 * @property string $city
 * @property string $contact
 * @property string|null $extraInfo
 * @property string $addressName
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereAddressName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereExtraInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\address whereUserId($value)
 */
	class address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\bakeries_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property string|null $speciality_type
 * @property int $low_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereSpecialityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bakeries_feature whereVendorId($value)
 */
	class bakeries_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\bkash_payment
 *
 * @property int $id
 * @property int $used_num
 * @property string $trxid
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\invoice $bkash
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment whereTrxid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\bkash_payment whereUsedNum($value)
 */
	class bkash_payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BridalOutfitFeature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property string|null $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property string|null $type_1
 * @property string|null $type_2
 * @property string|null $type_3
 * @property string|null $type_4
 * @property string|null $type_5
 * @property string|null $type_6
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereType1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereType2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereType3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereType4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereType5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereType6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BridalOutfitFeature whereVendorId($value)
 */
	class BridalOutfitFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\budgetcost
 *
 * @property int $id
 * @property int $user_id
 * @property int $venue
 * @property int $decoration
 * @property int $outfit
 * @property int $jewelery
 * @property int $makeup
 * @property int $photo
 * @property int $music
 * @property int $catering
 * @property int $bakeries
 * @property int $invitation
 * @property int $legal
 * @property int $transportation
 * @property int $honeymoon
 * @property int $other
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereBakeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereCatering($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereDecoration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereHoneymoon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereInvitation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereJewelery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereLegal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereMakeup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereMusic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereOutfit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereTransportation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetcost whereVenue($value)
 */
	class budgetcost extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\budgetpaid
 *
 * @property int $id
 * @property int $user_id
 * @property int $venue
 * @property int $decoration
 * @property int $outfit
 * @property int $jewelery
 * @property int $makeup
 * @property int $photo
 * @property int $music
 * @property int $catering
 * @property int $bakeries
 * @property int $invitation
 * @property int $legal
 * @property int $transportation
 * @property int $honeymoon
 * @property int $other
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereBakeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereCatering($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereDecoration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereHoneymoon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereInvitation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereJewelery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereLegal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereMakeup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereMusic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereOutfit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereTransportation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\budgetpaid whereVenue($value)
 */
	class budgetpaid extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\cart
 *
 * @property int $id
 * @property int $user_id
 * @property int $catagory_id
 * @property int $products_id
 * @property string $date
 * @property string $quantity
 * @property string|null $mess
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory $catagory
 * @property-read \App\Models\products $product
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereMess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\cart whereUserId($value)
 */
	class cart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\catagory
 *
 * @property int $id
 * @property string $name
 * @property int $is_service
 * @property int $status
 * @property int|null $layout
 * @property string $feature_table
 * @property string $layout_img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\cart $cart
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\packages[] $packages
 * @property-read int|null $packages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\products[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\querycart[] $querycart
 * @property-read int|null $querycart_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\products[] $vendors
 * @property-read int|null $vendors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\wishlist[] $wishlist
 * @property-read int|null $wishlist_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereFeatureTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereIsService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereLayout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereLayoutImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catagory whereUpdatedAt($value)
 */
	class catagory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\catering_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int|null $feature_2
 * @property int $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property string|null $menu_type
 * @property int $low_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereMenuType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\catering_feature whereVendorId($value)
 */
	class catering_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\checklist
 *
 * @property int $id
 * @property int $user_id
 * @property int $section
 * @property string $details
 * @property string $time
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\checklist whereUserId($value)
 */
	class checklist extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\contactus
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $messbody
 * @property int $is_opened
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus whereIsOpened($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus whereMessbody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\contactus whereUpdatedAt($value)
 */
	class contactus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\custom_order
 *
 * @property int $id
 * @property int $user_id
 * @property int $vendor_id
 * @property int $products_id
 * @property string $time
 * @property string $date
 * @property int $advance
 * @property int $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\offline_user $offline_user
 * @property-read \App\Models\products $product
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\custom_order whereVendorId($value)
 */
	class custom_order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\decoration_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property string|null $event_type
 * @property int $low_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\decoration_feature whereVendorId($value)
 */
	class decoration_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\dj_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property int $low_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\dj_feature whereVendorId($value)
 */
	class dj_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\inbox
 *
 * @property int $id
 * @property int $user_id
 * @property int $catagory_id
 * @property int $product_id
 * @property int $vendors_id
 * @property int $query_id
 * @property int $is_open
 * @property int $is_openForAdmin
 * @property int $is_mailed
 * @property int $type
 * @property string|null $mess
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory $catagory
 * @property-read \App\Models\products $product
 * @property-read \App\Models\querycart $querys
 * @property-read \App\User $user
 * @property-read \App\Models\vendors $vendors
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereIsMailed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereIsOpenForAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereMess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereQueryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inbox whereVendorsId($value)
 */
	class inbox extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\inboxchat
 *
 * @property int $id
 * @property int $inbox_id
 * @property string $msg
 * @property int $msg_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat whereInboxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat whereMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat whereMsgType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\inboxchat whereUpdatedAt($value)
 */
	class inboxchat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\invitation_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property string|null $speciality_type
 * @property int $low_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereSpecialityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invitation_feature whereVendorId($value)
 */
	class invitation_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\invoice
 *
 * @property int $id
 * @property string|null $orders_id
 * @property int $bkash_id
 * @property int $wire_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\bkash_payment $bkash
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice whereBkashId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice whereOrdersId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\invoice whereWireId($value)
 */
	class invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JewelleryFeature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property string|null $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property string|null $type_1
 * @property string|null $type_2
 * @property string|null $type_3
 * @property string|null $type_4
 * @property string|null $type_5
 * @property string|null $type_6
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereType1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereType2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereType3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereType4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereType5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereType6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JewelleryFeature whereVendorId($value)
 */
	class JewelleryFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\kazi_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property int $feature_1
 * @property string|null $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $area
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\kazi_feature whereVendorId($value)
 */
	class kazi_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\makeup_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property int $low_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\makeup_feature whereVendorId($value)
 */
	class makeup_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\mehedi_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property int $low_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\mehedi_feature whereVendorId($value)
 */
	class mehedi_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\my_vendors
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $vendors_name
 * @property string|null $catagory
 * @property string|null $contact_details
 * @property string|null $service_time
 * @property string|null $service_date
 * @property int $total_payment
 * @property int $advance_payment
 * @property int $due_payment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereAdvancePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereCatagory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereContactDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereDuePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereServiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereServiceTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereTotalPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\my_vendors whereVendorsName($value)
 */
	class my_vendors extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\offline_user
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $email
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\custom_order[] $custom_order
 * @property-read int|null $custom_order_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\offline_user whereUpdatedAt($value)
 */
	class offline_user extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\order
 *
 * @property int $id
 * @property string $order_date
 * @property int $user_id
 * @property int $catagory_id
 * @property int $products_id
 * @property int $vendors_id
 * @property string $time
 * @property int $invoice_id
 * @property int $temp_add
 * @property int $payment_type
 * @property string|null $mess
 * @property int $is_paid
 * @property int $online_paid
 * @property int $isconfirmed
 * @property int $is_delivered
 * @property int $total
 * @property int $advance
 * @property int $is_open
 * @property int $is_openForPayment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory $catagory
 * @property-read \App\Models\products $product
 * @property-read \App\User $user
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereIsDelivered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereIsOpenForPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereIsconfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereMess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereOnlinePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereTempAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\order whereVendorsId($value)
 */
	class order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\packages
 *
 * @property int $id
 * @property int $catagory_id
 * @property int $vendors_id
 * @property string $title
 * @property string $price
 * @property string $description
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\catagory[] $catagory
 * @property-read int|null $catagory_count
 * @property-read \App\Models\vendors $vendors
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\packages whereVendorsId($value)
 */
	class packages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\partner
 *
 * @property int $id
 * @property string $name
 * @property string $company
 * @property string $business_type
 * @property string $contact_addres
 * @property string $office_address
 * @property string $email
 * @property string $phone
 * @property int $experience
 * @property string $mess
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereBusinessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereContactAddres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereMess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereOfficeAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\partner whereUpdatedAt($value)
 */
	class partner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\phoneQuery
 *
 * @property int $id
 * @property string $phone
 * @property int|null $vendor_id
 * @property int|null $products_id
 * @property int $is_followup
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\products|null $product
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery whereIsFollowup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\phoneQuery whereVendorId($value)
 */
	class phoneQuery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\photography_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property int $feature_2
 * @property string|null $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property string|null $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property int $low_price
 * @property string|null $event_type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\photography_feature whereVendorId($value)
 */
	class photography_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\products
 *
 * @property int $id
 * @property string $image
 * @property int $catagory_id
 * @property string $title
 * @property string|null $short_des
 * @property string|null $long_des
 * @property string|null $contact
 * @property int $is_sellable
 * @property int $price
 * @property string|null $suffix
 * @property int $in_stock
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\catagory $catagory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\custom_order[] $custom_order
 * @property-read int|null $custom_order_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\product_image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\querycart[] $querycart
 * @property-read int|null $querycart_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\wishlist[] $wishlist
 * @property-read int|null $wishlist_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereIsSellable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereLongDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereShortDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereSuffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\products whereUpdatedAt($value)
 */
	class products extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\product_image
 *
 * @property int $id
 * @property int $products_id
 * @property string $img_location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\products $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image whereImgLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product_image whereUpdatedAt($value)
 */
	class product_image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\querycart
 *
 * @property int $id
 * @property int $user_id
 * @property int $catagory_id
 * @property int $vendors_id
 * @property int $products_id
 * @property string $date
 * @property string|null $mess
 * @property int $status
 * @property int $is_available
 * @property int $advance
 * @property int $total
 * @property int $is_open
 * @property int $is_confirm
 * @property int $is_mailed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $time
 * @property string|null $maindate
 * @property-read \App\Models\catagory $catagory
 * @property-read \App\Models\packages $package
 * @property-read \App\Models\products $product
 * @property-read \App\User $user
 * @property-read \App\Models\vendors $vendors
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereIsConfirm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereIsMailed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereMaindate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereMess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\querycart whereVendorsId($value)
 */
	class querycart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\rating
 *
 * @property int $id
 * @property int $vendor_id
 * @property int $user_id
 * @property int $rating
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\rating whereVendorId($value)
 */
	class rating extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\sslorder
 *
 * @property int $id
 * @property string|null $order_id
 * @property string|null $tran_id
 * @property string|null $val_id
 * @property string|null $currency
 * @property int $total_amount
 * @property string|null $store_amount
 * @property string|null $tran_date
 * @property string|null $cus_name
 * @property string|null $cus_email
 * @property string|null $cus_phone
 * @property string|null $order_status
 * @property string|null $bank_tran_id
 * @property string|null $card_issuer
 * @property string|null $card_brand
 * @property string|null $store_id
 * @property string|null $verify_sign
 * @property string|null $verify_sign_sha2
 * @property string|null $currency_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereBankTranId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCardIssuer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCurrencyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCusEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCusName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereCusPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereStoreAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereTranDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereTranId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereValId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereVerifySign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\sslorder whereVerifySignSha2($value)
 */
	class sslorder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\tempayment
 *
 * @property-read \App\Models\order $order
 * @property-read \App\Models\products $product
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempayment query()
 */
	class tempayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\tempquery
 *
 * @property int $id
 * @property int $user_id
 * @property int $catagory_id
 * @property int $vendors_id
 * @property int $products_id
 * @property string $date
 * @property string|null $mess
 * @property int $status
 * @property int $is_available
 * @property int $advance
 * @property int $total
 * @property int $is_open
 * @property int $is_confirm
 * @property int $is_mailed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $time
 * @property string|null $maindate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereIsConfirm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereIsMailed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereMaindate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereMess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\tempquery whereVendorsId($value)
 */
	class tempquery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\vendors
 *
 * @property int $id
 * @property int $catagory_id
 * @property string|null $profile_img
 * @property string|null $logo
 * @property string $title
 * @property string|null $about_us
 * @property string|null $contact
 * @property string $startingat_1_title
 * @property string $startingat_1_price
 * @property string|null $startingat_2_title
 * @property string|null $startingat_2_price
 * @property string|null $startingat_3_title
 * @property string|null $startingat_3_price
 * @property string|null $feature_image_1
 * @property string|null $feature_image_2
 * @property string|null $feature_image_3
 * @property string|null $video_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory $catagory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\custom_order[] $custom_order
 * @property-read int|null $custom_order_count
 * @property-read \App\Models\vendor_features $features
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\vendor_image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\packages[] $packages
 * @property-read int|null $packages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\rating[] $rating
 * @property-read int|null $rating_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\wishlist[] $wishlist
 * @property-read int|null $wishlist_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereAboutUs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereFeatureImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereFeatureImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereFeatureImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereProfileImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereStartingat1Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereStartingat1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereStartingat2Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereStartingat2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereStartingat3Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereStartingat3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendors whereVideoId($value)
 */
	class vendors extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\vendor_features
 *
 * @property int $id
 * @property int $catagory_id
 * @property string $feature1_img
 * @property string $feature1_title
 * @property string $feature2_img
 * @property string $feature2_title
 * @property string $feature3_img
 * @property string $feature3_title
 * @property string $feature4_img
 * @property string $feature4_title
 * @property string|null $feature5_img
 * @property string|null $feature5_title
 * @property string|null $feature6_img
 * @property string|null $feature6_title
 * @property string|null $feature7_img
 * @property string|null $feature7_title
 * @property string|null $feature8_img
 * @property string|null $feature8_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory $catagory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature1Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature2Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature3Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature4Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature4Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature5Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature5Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature6Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature6Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature7Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature7Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature8Img($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereFeature8Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_features whereUpdatedAt($value)
 */
	class vendor_features extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\vendor_image
 *
 * @property int $id
 * @property int $catagory_id
 * @property int $vendors_id
 * @property string $image_locations
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\vendors $vendors_img
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image whereImageLocations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\vendor_image whereVendorsId($value)
 */
	class vendor_image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\venue_feature
 *
 * @property int $id
 * @property int $vendor_id
 * @property string|null $feature_1
 * @property string|null $feature_2
 * @property int $feature_3
 * @property string|null $feature_4
 * @property string|null $feature_5
 * @property int $feature_6
 * @property string|null $feature_7
 * @property string|null $feature_8
 * @property int $low_price
 * @property string|null $area
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\packages[] $package
 * @property-read int|null $package_count
 * @property-read \App\Models\vendors $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereFeature8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereLowPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\venue_feature whereVendorId($value)
 */
	class venue_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\wishlist
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $catagory_id
 * @property int|null $vendors_id
 * @property int|null $products_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory|null $catagory
 * @property-read \App\Models\products|null $product
 * @property-read \App\User $user
 * @property-read \App\Models\vendors|null $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereCatagoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\wishlist whereVendorsId($value)
 */
	class wishlist extends \Eloquent {}
}

namespace App{
/**
 * App\PaymentDetail
 *
 * @property int $id
 * @property int $query_id
 * @property int $user_id
 * @property int|null $category_id
 * @property int|null $vendor_id
 * @property int|null $product_id
 * @property string|null $status
 * @property int|null $invoice_id
 * @property float $payment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereQueryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PaymentDetail whereVendorId($value)
 */
	class PaymentDetail extends \Eloquent {}
}

namespace App{
/**
 * App\Query
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $category_id
 * @property int|null $vendor_id
 * @property int|null $product_id
 * @property int|null $tag_id
 * @property string|null $unit
 * @property string|null $quantity
 * @property string|null $admin_message
 * @property string|null $message
 * @property string|null $event_date
 * @property string|null $shift
 * @property float $total
 * @property float $advance
 * @property float $discount
 * @property float $payment
 * @property string|null $expiry_date
 * @property string|null $expiry_time
 * @property string|null $status
 * @property int $is_available
 * @property int $is_open
 * @property int $in_cart
 * @property int $submit_id
 * @property int $queue_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\catagory|null $catagory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \App\Models\packages $package
 * @property-read \App\Models\products|null $product
 * @property-read \App\Tag|null $tag
 * @property-read \App\User $user
 * @property-read \App\Models\vendors|null $vendors
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereAdminMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereEventDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereExpiryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereInCart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereQueueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereSubmitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Query whereVendorId($value)
 */
	class Query extends \Eloquent {}
}

namespace App{
/**
 * App\Tag
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Query[] $queries
 * @property-read int|null $queries_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereUserId($value)
 */
	class Tag extends \Eloquent {}
}

namespace App{
/**
 * App\TempTransaction
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $query_id
 * @property float|null $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction whereQueryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TempTransaction whereUserId($value)
 */
	class TempTransaction extends \Eloquent {}
}

namespace App{
/**
 * App\UnauthorisedQuery
 *
 * @property int $id
 * @property string $mobile_number
 * @property int|null $category_id
 * @property int|null $vendor_id
 * @property int|null $product_id
 * @property string|null $unit
 * @property string|null $quantity
 * @property string|null $message
 * @property string|null $event_date
 * @property string|null $shift
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereEventDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UnauthorisedQuery whereVendorId($value)
 */
	class UnauthorisedQuery extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string|null $token
 * @property string $password
 * @property string $fname
 * @property string $lname
 * @property string $contact
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\address[] $address
 * @property int $mybudget
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $address_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\order[] $order
 * @property-read int|null $order_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\rating[] $rating
 * @property-read int|null $rating_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\wishlist[] $wishlist
 * @property-read int|null $wishlist_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMybudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

