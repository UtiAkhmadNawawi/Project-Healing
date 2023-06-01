<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Room List</h3>
                            <div class="nk-block-des text-soft">
                                <p>Here is our verious rooms.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a data-bs-toggle="modal" href="#add-room"><span>Add
                                                            Room</span></a></li>
                                                <li><a href="#"><span>Import Room</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                            <div class="form-wrap w-150px"><select
                                                    class="form-select js-select2 js-select2-sm" data-search="off"
                                                    data-placeholder="Bulk Action">
                                                    <option value="">Bulk Action</option>
                                                    <option value="change">Change Status</option>
                                                </select></div>
                                            <div class="btn-wrap"><span class="d-none d-md-block"><button
                                                        class="btn btn-dim btn-outline-light disabled">Apply</button></span><span
                                                    class="d-md-none"><button
                                                        class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                            class="icon ni ni-arrow-right"></em></button></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li><a href="#" class="btn btn-icon search-toggle toggle-search"
                                                    data-target="search"><em class="icon ni ni-search"></em></a></li>
                                            <li class="btn-toolbar-sep"></li>
                                            <li>
                                                <div class="toggle-wrap"><a href="#"
                                                        class="btn btn-icon btn-trigger toggle"
                                                        data-target="cardTools"><em
                                                            class="icon ni ni-menu-right"></em></a>
                                                    <div class="toggle-content" data-content="cardTools">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li class="toggle-close"><a href="#"
                                                                    class="btn btn-icon btn-trigger toggle"
                                                                    data-target="cardTools"><em
                                                                        class="icon ni ni-arrow-left"></em></a>
                                                            </li>
                                                            <li>
                                                                <div class="dropdown"><a href="#"
                                                                        class="btn btn-trigger btn-icon dropdown-toggle"
                                                                        data-bs-toggle="dropdown">
                                                                        <div class="dot dot-primary">
                                                                        </div><em class="icon ni ni-filter-alt"></em>
                                                                    </a>
                                                                    <div
                                                                        class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                        <div class="dropdown-head"><span
                                                                                class="sub-title dropdown-title">Filter
                                                                                Rooms</span>
                                                                            <div class="dropdown"><a href="#"
                                                                                    class="btn btn-sm btn-icon"><em
                                                                                        class="icon ni ni-more-h"></em></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                            <div class="row gx-6 gy-3">
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="overline-title overline-title-alt">Status</label><select
                                                                                            class="form-select js-select2 js-select2-sm">
                                                                                            <option value="any">
                                                                                                Any
                                                                                                Status
                                                                                            </option>
                                                                                            <option value="paid">
                                                                                                Booked
                                                                                            </option>
                                                                                            <option value="open">
                                                                                                Open
                                                                                            </option>
                                                                                            <option value="inactive">
                                                                                                Inactive
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="overline-title overline-title-alt">Room
                                                                                            Type</label><select
                                                                                            class="form-select js-select2 js-select2-sm">
                                                                                            <option value="any">
                                                                                                Any Type
                                                                                            </option>
                                                                                            <option value="single">
                                                                                                Single
                                                                                            </option>
                                                                                            <option value="double">
                                                                                                Double
                                                                                            </option>
                                                                                            <option value="delux">
                                                                                                Delux
                                                                                            </option>
                                                                                            <option value="sdelux">
                                                                                                Super
                                                                                                Delux
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary">Filter</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-foot between">
                                                                            <a class="clickable" href="#">Reset
                                                                                Filter</a><a href="#">Save Filter</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dropdown"><a href="#"
                                                                        class="btn btn-trigger btn-icon dropdown-toggle"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-setting"></em></a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                        <ul class="link-check">
                                                                            <li><span>Show</span></li>
                                                                            <li class="active"><a href="#">10</a></li>
                                                                            <li><a href="#">20</a></li>
                                                                            <li><a href="#">50</a></li>
                                                                        </ul>
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li class="active"><a href="#">DESC</a>
                                                                            </li>
                                                                            <li><a href="#">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content"><a href="#"
                                                class="search-back btn btn-icon toggle-search" data-target="search"><em
                                                    class="icon ni ni-arrow-left"></em></a><input type="text"
                                                class="form-control border-transparent form-focus-none"
                                                placeholder="Search by room no or type"><button
                                                class="search-submit btn btn-icon"><em
                                                    class="icon ni ni-search"></em></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid"><label
                                                    class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">Room No.</span>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">Room Type</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">AC/Non
                                                AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Meal</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Bed
                                                Capacity</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Rent</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                            <div class="dropdown"><a href="#"
                                                    class="btn btn-xs btn-outline-light btn-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" data-offset="0,5"><em
                                                        class="icon ni ni-plus"></em></a>
                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                    <ul class="link-tidy sm no-bdr">
                                                        <li>
                                                            <div
                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    checked="" id="bo"><label
                                                                    class="custom-control-label" for="bo">Booked</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    checked="" id="open"><label
                                                                    class="custom-control-label" for="open">Open</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="inac"><label class="custom-control-label"
                                                                    for="inac">Inactive</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1"><label
                                                    class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">101</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Single <span
                                                    class="dot dot-primary d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>None</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>1</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">32.00
                                                <span class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-primary">Booked</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid2"><label
                                                    class="custom-control-label" for="uid2"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">102</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Single <span
                                                    class="dot dot-warning d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Breakfast</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>1</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">35.00
                                                <span class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-warning">Pending</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid3"><label
                                                    class="custom-control-label" for="uid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">103</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Double <span
                                                    class="dot dot-success d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>None</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Dinner</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>2</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">44.99
                                                <span class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-success">Open</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid4"><label
                                                    class="custom-control-label" for="uid4"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">104</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Double <span
                                                    class="dot dot-success d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Two</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>2</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">48.99<span
                                                    class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-success">Open</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid5"><label
                                                    class="custom-control-label" for="uid5"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">105</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Delux <span
                                                    class="dot dot-primary d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>None</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Lunch</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>2</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">53.99<span
                                                    class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-primary">Booked</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid6"><label
                                                    class="custom-control-label" for="uid6"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">201</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Super Delux <span
                                                    class="dot dot-primary d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>All</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>3</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">68.99<span
                                                    class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-primary">Booked</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid7"><label
                                                    class="custom-control-label" for="uid7"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">202</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Super Delux <span
                                                    class="dot dot-success d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Two</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>3</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">68.99<span
                                                    class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-success">Open</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid8"><label
                                                    class="custom-control-label" for="uid8"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">301</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Suit<span
                                                    class="dot dot-danger d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Breakfast</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>3</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">450<span
                                                    class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-danger">Inactive</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid9"><label
                                                    class="custom-control-label" for="uid9"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">302</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Suit<span
                                                    class="dot dot-danger d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Two</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>3</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">499.99<span
                                                    class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-danger">Inactive</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid10"><label
                                                    class="custom-control-label" for="uid10"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="text-primary">303</span>
                                        </div>
                                        <div class="nk-tb-col"><span>Suit<span
                                                    class="dot dot-danger d-md-none ms-1"></span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span>AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>All</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>5</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="tb-amount">999.99<span
                                                    class="currency">USD</span></span></div>
                                        <div class="nk-tb-col tb-col-md"><span
                                                class="tb-status text-danger">Inactive</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown"><a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#edit-room"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><span class="page-link"><em
                                                        class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">7</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="g">
                                        <div
                                            class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div><select class="form-select js-select2" data-search="on"
                                                    data-dropdown="xs center">
                                                    <option value="page-1">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                    <option value="page-7">7</option>
                                                    <option value="page-8">8</option>
                                                    <option value="page-9">9</option>
                                                    <option value="page-10">10</option>
                                                    <option value="page-11">11</option>
                                                    <option value="page-12">12</option>
                                                    <option value="page-13">13</option>
                                                    <option value="page-14">14</option>
                                                    <option value="page-15">15</option>
                                                    <option value="page-16">16</option>
                                                    <option value="page-17">17</option>
                                                    <option value="page-18">18</option>
                                                    <option value="page-19">19</option>
                                                    <option value="page-20">20</option>
                                                </select></div>
                                            <div>OF 102</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="add-room">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em
                    class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Room</h5>
                <form action="#" class="mt-2">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="room-no-add">Room
                                    No</label><input type="number" class="form-control" id="room-no-add"
                                    placeholder="Room No"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Room Type</label>
                                <div class="form-control-wrap"><select class="form-select js-select2">
                                        <option value="default_option">Room Type</option>
                                        <option value="option_select_room_type">Delux</option>
                                        <option value="option_select_room_type">Super Delux</option>
                                        <option value="option_select_room_type">Single</option>
                                        <option value="option_select_room_type">Double</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Air Conditon</label>
                                <div class="form-control-wrap"><select class="form-select js-select2">
                                        <option value="default_option">AC</option>
                                        <option value="option_select_ac">Non AC</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="bed-no-add">Bed
                                    Capacity</label><input type="number" class="form-control" id="bed-no-add"
                                    placeholder="Bed Capacity"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Meal</label>
                                <div class="form-control-wrap"><select class="form-select js-select2"
                                        data-placeholder="Select multiple options">
                                        <option value="default_option">None</option>
                                        <option value="option_select_meal">Breakfast</option>
                                        <option value="option_select_meal">Lunch</option>
                                        <option value="option_select_meal">Dinner</option>
                                        <option value="option_select_meal">Two</option>
                                        <option value="option_select_meal">All</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="rent-add">Rent</label><input
                                    type="number" class="form-control" id="rent-add" placeholder="0.00 USD"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Status</label>
                                <div class="form-control-wrap"><select class="form-select js-select2"
                                        data-placeholder="Select multiple options">
                                        <option value="default_option">Open</option>
                                        <option value="option_select_status">Inactive</option>
                                        <option value="option_select_status">Booked</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li><button class="btn btn-primary" data-bs-dismiss="modal">Add Room</button></li>
                                <li><a href="#" class="link" data-bs-dismiss="modal">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="edit-room">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em
                    class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Edit Room</h5>
                <form action="#" class="mt-2">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="room-no-edit">Room
                                    No</label><input type="number" class="form-control" id="room-no-edit" value="107"
                                    placeholder="Room No"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Room Type</label>
                                <div class="form-control-wrap"><select class="form-select js-select2">
                                        <option value="default_option">Room Type</option>
                                        <option value="option_select_room_type">Delux</option>
                                        <option value="option_select_room_type">Super Delux</option>
                                        <option value="option_select_room_type">Single</option>
                                        <option value="option_select_room_type">Double</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Air Conditon</label>
                                <div class="form-control-wrap"><select class="form-select js-select2">
                                        <option value="default_option">AC</option>
                                        <option value="option_select_ac">Non AC</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="bed-no-edit">Bed
                                    Capacity</label><input type="number" class="form-control" id="bed-no-edit"
                                    placeholder="Bed Capacity"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Meal</label>
                                <div class="form-control-wrap"><select class="form-select js-select2"
                                        data-placeholder="Select multiple options">
                                        <option value="default_option">None</option>
                                        <option value="option_select_meal">Breakfast</option>
                                        <option value="option_select_meal">Lunch</option>
                                        <option value="option_select_meal">Dinner</option>
                                        <option value="option_select_meal">Two</option>
                                        <option value="option_select_meal">All</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="rent-edit">Rent</label><input
                                    type="number" class="form-control" id="rent-edit" value="38.99"
                                    placeholder="0.00 USD"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Status</label>
                                <div class="form-control-wrap"><select class="form-select js-select2"
                                        data-placeholder="Select multiple options">
                                        <option value="default_option">Open</option>
                                        <option value="option_select_status">Inactive</option>
                                        <option value="option_select_status">Booked</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li><button class="btn btn-primary" data-bs-dismiss="modal">Update Room</button>
                                </li>
                                <li><a href="#" class="link" data-bs-dismiss="modal">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>