@extends('admin.layouts.master')

@section('content')

<div class="content">
    <div class="page-header">
      <div class="page-title">
        <h4>User List</h4>
        <h6>Manage your User</h6>
      </div>
      <div class="page-btn">
        <a href="adduser.html" class="btn btn-added"
          ><img
            src="assets/img/icons/plus.svg"
            alt="img"
            class="me-2"
          />Add User</a
        >
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="table-top">
          <div class="search-set">
            <div class="search-path">
              <a class="btn btn-filter" id="filter_search">
                <img src="assets/img/icons/filter.svg" alt="img" />
                <span
                  ><img src="assets/img/icons/closes.svg" alt="img"
                /></span>
              </a>
            </div>
            <div class="search-input">
              <a class="btn btn-searchset">
                <img src="assets/img/icons/search-white.svg" alt="img" />
              </a>
            </div>
          </div>
          <div class="wordset">
            <ul>
              <li>
                <a
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="pdf"
                  ><img src="assets/img/icons/pdf.svg" alt="img"
                /></a>
              </li>
              <li>
                <a
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="excel"
                  ><img src="assets/img/icons/excel.svg" alt="img"
                /></a>
              </li>
              <li>
                <a
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="print"
                  ><img src="assets/img/icons/printer.svg" alt="img"
                /></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="card" id="filter_inputs">
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" placeholder="Enter User Name" />
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" placeholder="Enter Phone" />
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" placeholder="Enter Email" />
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <select class="select">
                    <option>Disable</option>
                    <option>Enable</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                <div class="form-group">
                  <a class="btn btn-filters ms-auto"
                    ><img
                      src="assets/img/icons/search-whites.svg"
                      alt="img"
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table datanew">
            <thead>
              <tr>
                <th>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </th>
                <th>Profile</th>
                <th>First name</th>
                <th>Last name</th>
                <th>User name</th>
                <th>Phone</th>
                <th>email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer1.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Thomas</td>
                <td>Thomas</td>
                <td>Thomas21</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="42362a2d2f233102273a232f322e276c212d2f"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input type="checkbox" id="user1" class="check" />
                    <label for="user1" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer2.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Benjamin</td>
                <td>Franklin</td>
                <td>504Benjamin</td>
                <td>123-456-888</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="e685939592898b8394a6839e878b968a83c885898b"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input
                      type="checkbox"
                      id="user2"
                      class="check"
                      checked=""
                    />
                    <label for="user2" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer3.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>James</td>
                <td>James</td>
                <td>James 524</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="9ef4fff3fbeddefbe6fff3eef2fbb0fdf1f3"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input
                      type="checkbox"
                      id="user3"
                      class="check"
                      checked=""
                    />
                    <label for="user3" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer4.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Bruklin</td>
                <td>Bruklin</td>
                <td>Bruklin2022</td>
                <td>123-456-888</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="781a0a0d13141116381d00191508141d561b1715"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input
                      type="checkbox"
                      id="user4"
                      class="check"
                      checked=""
                    />
                    <label for="user4" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer5.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Franklin</td>
                <td>Jacob</td>
                <td>BeverlyWIN25</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="aceec9dac9dec0d5ecc9d4cdc1dcc0c982cfc3c1"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input type="checkbox" id="user5" class="check" />
                    <label for="user5" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer6.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>B. Huber</td>
                <td>Jacob</td>
                <td>BeverlyWIN25</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="7b330e191e093b1e031a160b171e55181416"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input type="checkbox" id="user6" class="check" />
                    <label for="user6" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer7.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Alwin</td>
                <td>Alwin</td>
                <td>Alwin243</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="0764727473686a627547627f666a776b622964686a"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input type="checkbox" id="user7" class="check" />
                    <label for="user7" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer8.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Fred john</td>
                <td>john</td>
                <td>FredJ25</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="bad0d5d2d4fadfc2dbd7cad6df94d9d5d7"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input type="checkbox" id="user15" class="check" />
                    <label for="user15" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer1.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Rasmussen</td>
                <td>Gothic</td>
                <td>Cras56</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="3a685b49574f49495f547a5f425b574a565f14595557"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input
                      type="checkbox"
                      id="user9"
                      class="check"
                      checked=""
                    />
                    <label for="user9" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer2.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Grace</td>
                <td>Halena</td>
                <td>Grace2022</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="a0c3d5d3d4cfcdc5d2e0c5d8c1cdd0ccc58ec3cfcd"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input
                      type="checkbox"
                      id="user10"
                      class="check"
                      checked=""
                    />
                    <label for="user10" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer3.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Rasmussen</td>
                <td>Gothic</td>
                <td>Cras56</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="702211031d050303151e301508111d001c155e131f1d"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input
                      type="checkbox"
                      id="user19"
                      class="check"
                      checked=""
                    />
                    <label for="user19" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                  </label>
                </td>
                <td class="productimgname">
                  <a href="javascript:void(0);" class="product-img">
                    <img
                      src="assets/img/customer/customer4.jpg"
                      alt="product"
                    />
                  </a>
                </td>
                <td>Grace</td>
                <td>Halena</td>
                <td>Grace2022</td>
                <td>+12163547758</td>
                <td>
                  <a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="3e5d4b4d4a51535b4c7e5b465f534e525b105d5153"
                    >[email&#160;protected]</a
                  >
                </td>
                <td>
                  <div
                    class="status-toggle d-flex justify-content-between align-items-center"
                  >
                    <input
                      type="checkbox"
                      id="user18"
                      class="check"
                      checked=""
                    />
                    <label for="user18" class="checktoggle"
                      >checkbox</label
                    >
                  </div>
                </td>
                <td>
                  <a class="me-3" href="edituser.html">
                    <img src="assets/img/icons/edit.svg" alt="img" />
                  </a>
                  <a class="me-3 confirm-text" href="javascript:void(0);">
                    <img src="assets/img/icons/delete.svg" alt="img" />
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  @endsection