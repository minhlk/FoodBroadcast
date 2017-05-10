<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DiadiemRequest as StoreRequest;
use App\Http\Requests\DiadiemRequest as UpdateRequest;

class DiadiemCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Diadiem');
        $this->crud->setRoute('admin/diadiem');
        $this->crud->setEntityNameStrings('diadiem', ' Địa điểm');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        
        // $this->crud->addField(
        //     [   // Number
        //     'name' => 'idTP',
        //     'label' => 'Mã thành phố',
        //     'type' => 'number'
        //     // optionals
        //     // 'attributes' => ["step" => "any"], // allow decimals
        //     // 'prefix' => "$",
        //     // 'suffix' => ".00",
        // ]
        //     );
         $this->crud->addField(
            [ 
            'label' => 'Mã thành phố',  
           'type' => 'select',
           'name' => 'idTP', // the db column for the foreign key
           'entity' => 'thanhpho', // the method that defines the relationship in your Model
           'attribute' => 'tenTP', // foreign key attribute that is shown to user
           'model' => "App\Models\Thanhpho" // foreign key model
                ]
            );
        $this->crud->addField(
            [   
            'label' => 'Mã Khu vực',  
           'type' => 'select',
           'name' => 'idKhuVuc', // the db column for the foreign key
           'entity' => 'khuvuc', // the method that defines the relationship in your Model
           'attribute' => 'tenKV', // foreign key attribute that is shown to user
           'model' => "App\Models\Khuvuc" // foreign key model
        ]
            );
        $this->crud->addField(
        [ // base64_image
            'name' => 'image',
            'label' => ' Hình ảnh',
           'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
        ]);
        $this->crud->addField(
        [ 
            'name' => 'ten',
            'label' => " Tên địa điểm ",
            'type' => 'text',
        ]);
        $this->crud->addField(
            [   // Number
            'name' => 'giaMin',
            'label' => ' Giá nhỏ nhất',
            'type' => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => "VNĐ",
            // 'suffix' => "000"
        ]);
        $this->crud->addField(
            [   // Number
            'name' => 'giaMax',
            'label' => ' Giá thấp nhất',
            'type' => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
             'prefix' => "VNĐ",
            // 'suffix' => "000"
        ]);
        $this->crud->addField(
        [ 
            'name' => 'diaChi',
            'label' => " địa chỉ ",
            'type' => 'textarea',
        ]);
        $this->crud->addField(
        [ 
            'name' => 'moTa',
            'label' => " mô tả ",
            'type' => 'textarea',
        ]);
         $this->crud->addField(
        [ 
            'name' => 'trangWeb',
            'label' => " Website ",
            'type' => 'text',
        ]);
         $this->crud->addField(
            [   // Number
            'name' => 'soDienThoai',
            'label' => ' Số điện thoại',
            'type' => 'number'
        ]);
         $this->crud->addField(
            [   // Number
            'name' => 'gioBatDau',
            'label' => ' Giờ bắt đầu',
            'type' => 'number'
        ]);
         $this->crud->addField(
            [   // Number
            'name' => 'phutBatDau',
            'label' => ' phut bắt đầu',
            'type' => 'number'
        ]);
         $this->crud->addField(
            [   // Number
            'name' => 'gioKetThuc',
            'label' => ' Giờ kết thúc',
            'type' => 'number'
        ]);
           $this->crud->addField(
            [   // Number
            'name' => 'phutKetThuc',
            'label' => ' phut kết thúc',
            'type' => 'number'
        ]);



           // --------------------













           $this->crud->addColumn(
            [   // Number
            'name' => 'idTP',
            'label' => 'Mã thành phố',
            'type' => 'number'
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            // 'prefix' => "$",
            // 'suffix' => ".00",
        ]
            );
        $this->crud->addColumn(
            [   // Number
            'name' => 'idKhuVuc',
            'label' => 'Mã Khu vực',
            'type' => 'number'
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            // 'prefix' => "$",
            // 'suffix' => ".00",
        ]
            );
        $this->crud->addColumn(
        [ // base64_image
            'name' => 'image',
            'label' => ' Hình ảnh',
            'type' => 'browse'
        ]);
        $this->crud->addColumn(
        [ 
            'name' => 'ten',
            'label' => " Tên địa điểm ",
            'type' => 'text',
        ]);
        $this->crud->addColumn(
            [   // Number
            'name' => 'giaMin',
            'label' => ' Giá nhỏ nhất',
            'type' => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => "VNĐ",
            // 'suffix' => "000"
        ]);
        $this->crud->addColumn(
            [   // Number
            'name' => 'giaMax',
            'label' => ' Giá thấp nhất',
            'type' => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
             'prefix' => "VNĐ",
            // 'suffix' => "000"
        ]);
        $this->crud->addColumn(
        [ 
            'name' => 'diaChi',
            'label' => " địa chỉ ",
            'type' => 'textarea',
        ]);
        $this->crud->addColumn(
        [ 
            'name' => 'moTa',
            'label' => " mô tả ",
            'type' => 'textarea',
        ]);
         $this->crud->addColumn(
        [ 
            'name' => 'trangWeb',
            'label' => " Website ",
            'type' => 'text',
        ]);
         $this->crud->addColumn(
            [   // Number
            'name' => 'soDienThoai',
            'label' => ' Số điện thoại',
            'type' => 'number'
        ]);
         $this->crud->addColumn(
            [   // Number
            'name' => 'gioBatDau',
            'label' => ' Giờ bắt đầu',
            'type' => 'number'
        ]);
         $this->crud->addColumn(
            [   // Number
            'name' => 'phutBatDau',
            'label' => ' phut bắt đầu',
            'type' => 'number'
        ]);
         $this->crud->addColumn(
            [   // Number
            'name' => 'gioKetThuc',
            'label' => ' Giờ kết thúc',
            'type' => 'number'
        ]);
           $this->crud->addColumn(
            [   // Number
            'name' => 'phutKetThuc',
            'label' => ' phut kết thúc',
            'type' => 'number'
        ]);
        // $this->crud->setFromDb();
        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
