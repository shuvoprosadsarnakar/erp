<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 
        [
            ['name' => 'user.role.view'],
            ['name' => 'user.name.view'],
            ['name' => 'user.image.view'],
            ['name' => 'user.email.view'],
            ['name' => 'user.mobile.view'],
            ['name' => 'user.address.view'],
            ['name' => 'user.type.view'],
            ['name' => 'user.role.edit'],
            ['name' => 'user.name.edit'],
            ['name' => 'user.image.edit'],
            ['name' => 'user.email.edit'],
            ['name' => 'user.mobile.edit'],
            ['name' => 'user.address.edit'],
            ['name' => 'user.type.edit'],
            ['name' => 'user.create'],
            ['name' => 'user.edit'],
            ['name' => 'user.delete'],
            ['name' => 'product.type.view'],
            ['name' => 'product.name.view'],
            ['name' => 'product.description.view'],
            ['name' => 'product.sku.view'],
            ['name' => 'product.buy_price.view'],
            ['name' => 'product.sell_price.view'],
            ['name' => 'product.units_in_stock.view'],
            ['name' => 'product.note.view'],
            ['name' => 'product.type.edit'],
            ['name' => 'product.name.edit'],
            ['name' => 'product.description.edit'],
            ['name' => 'product.sku.edit'],
            ['name' => 'product.buy_price.edit'],
            ['name' => 'product.sell_price.edit'],
            ['name' => 'product.units_in_stock.edit'],
            ['name' => 'product.note.edit'],
            ['name' => 'product.create'],
            ['name' => 'product.edit'],
            ['name' => 'product.delete'],
            ['name' => 'productLead.customer.view'],
            ['name' => 'productLead.counter.view'],
            ['name' => 'productLead.status_0.view'],
            ['name' => 'productOrder.shipped_by.view'],
            ['name' => 'productOrder.shipping_method.view'],
            ['name' => 'productOrder.status_1.view'],
            ['name' => 'productOrder.date_status_1.view'],
            ['name' => 'productOrder.status_2.view'],
            ['name' => 'productOrder.date_status_2.view'],
            ['name' => 'productLead.customer.edit'],
            ['name' => 'productLead.counter.edit'],
            ['name' => 'productLead.status_0.edit'],
            ['name' => 'productOrder.shipped_by.edit'],
            ['name' => 'productOrder.shipping_method.edit'],
            ['name' => 'productOrder.status_1.edit'],
            ['name' => 'productOrder.date_status_1.edit'],
            ['name' => 'productOrder.status_2.edit'],
            ['name' => 'productOrder.date_status_2.edit'],
            ['name' => 'productOrder.delete'],
        ];

        foreach ($data as $d) 
        {
            $d['guard_name'] = 'web';
            Permission::create($d);
        }
    }
}
