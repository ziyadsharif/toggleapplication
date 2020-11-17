<!doctype html>
<html lang="en">

<?php
require("header.php");
?>

<body class="bidding-body">
    <!-- Main page -->
    <div class="container-fluid alpha omega blue-bg page-container bpc">
        <div class="dashboard-layout bidding-container">
            <?php
            require("menuworkstation.php");
            ?>

            <div class="dashboard">
                <div class="dashboard-layout-content">
                    <div class="dashboard-layout-header">
                        <div class="dlh dlh-left">
                            <div class="hotel-avatar">
                                <img src="<?php echo base_url() ?>assets/images/cart-white.png" />
                            </div>
                            <div class="dls-title-holder">
                                <div>
                                    <p id="txtprojectname"></p>
                                    <p>Bidding Page</p>
                                </div>
                                <div class="general-form">
                                    <div class="formRow half">
                                        <select id="ddlProjects" class="bidding-header-select">
                                            <!--   <option selected="selected">Select Project</option> -->
                                            <option value="" disabled selected selected="selected">Select Project</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dlh dlh-right">
                            <div class="dlh-button">
                                <img src="<?php echo base_url() ?>assets/images/compare.png" />
                                <span>Compare Prices</span>
                            </div>
                            <div class="dlh-button">
                                <img src="<?php echo base_url() ?>assets/images/send-white.png" />
                                <span>Send Request</span>
                            </div>
                            <div class="dlh-button">
                                <img src="<?php echo base_url() ?>assets/images/trash-white.png" />
                                <span>Delete</span>
                            </div>
                            <div class="dlh-button circle">
                                <img src="<?php echo base_url() ?>assets/images/share-white.png" />
                            </div>
                        </div>
                    </div>

                    <div class="bidding-content-body">
                        <div class="bidding-section bidding-left">
                            <div class="section-header">
                                <h2>Bill Of Quantities</h2>
                                <label>
                                    Sort by:
                                    <div class="general-form">
                                        <div class="formRow full">
                                            <select class="bidding-header-select">
                                            </select>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="bidding-item">
                                <div class="card fit-parent">
                                    <div class="expanded-boq-table">
                                        <table class="tgm-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <input type="checkbox" />
                                                    </th>
                                                    <th>Steelite</th>
                                                    <th>Collection</th>
                                                    <th>Area</th>
                                                    <th>Quantity</th>
                                                    <th>Category</th>
                                                    <th>Colour</th>
                                                    <th>SKU</th>
                                                    <th id="small"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="#boqList">


                                            </tbody>
                                        </table>
                                        <table class="tgm-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <input type="checkbox" />
                                                    </th>
                                                    <th>Rv Ceramiks</th>
                                                    <th>Collection</th>
                                                    <th>Area</th>
                                                    <th>Quantity</th>
                                                    <th>Category</th>
                                                    <th>Colour</th>
                                                    <th>SKU</th>
                                                    <th id="small"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>Red Teacup</td>
                                                    <td>Rio</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>Kitchen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select>
                                                                    <option>40000</option>
                                                                    <option>50000</option>
                                                                    <option>60000</option>
                                                                    <option>70000</option>
                                                                    <option>80000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Banqueting</td>
                                                    <td>Red</td>
                                                    <td>Banqueting</td>
                                                    <td id="small">
                                                        <img src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="standard-boq-table">
                                        <div class="header">
                                            <div class="hs left">
                                                <input type="checkbox" />
                                                <h3>Steelite</h3>
                                            </div>
                                            <div class="hs right">
                                                <h3>Area</h3>
                                                <h3>Quantity</h3>
                                            </div>
                                        </div>

                                        <div class="body">
                                            <div class="boq-container">
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>



                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_2.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="header">
                                            <div class="hs left">
                                                <input type="checkbox" />
                                                <h3>RAK Ceramics</h3>
                                            </div>
                                            <div class="hs right">
                                                <h3>Area</h3>
                                                <h3>Quantity</h3>
                                            </div>
                                        </div>

                                        <div class="body">
                                            <div class="boq-container">
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>



                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_2.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>
                                                <div class="boq-item">
                                                    <div class="checkbox-container">
                                                        <input type="checkbox" />
                                                    </div>
                                                    <div class="product-info-cell">
                                                        <img src="<?php echo base_url() ?>assets/images/cup_dummy_1.png" class="item-image" />

                                                        <div class="name-container">
                                                            <p>Rio <b>by</b> Steelite™</p>
                                                            <p><b>Red Teacup</b></p>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">Project</option>
                                                                    <option value="Personal">Kitchen</option>
                                                                    <option value="JW Marriot Harageisa">Bedrooms
                                                                    </option>
                                                                    <option value="Kempinski Amman">Restaurant</option>
                                                                    <option value="Fairmont Harare">Lobby</option>
                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dd-container form-container">
                                                        <div class="general-form">
                                                            <div class="full">
                                                                <select>
                                                                    <option disabled="true">40000</option>
                                                                    <option value="Personal">50000</option>
                                                                    <option value="JW Marriot Harageisa">60000</option>
                                                                    <option value="Kempinski Amman">70000</option>

                                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="boq-delete-container">
                                                        <img id="trash-icon" src="<?php echo base_url() ?>assets/images/trash.png" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="resize-toggle">
                            <img src="<?php echo base_url() ?>assets/images/arrow-left.png" />
                            <img src="<?php echo base_url() ?>assets/images/arrow-right.png" />
                        </div>
                        <div class="bidding-section bidding-right">
                            <div class="section-header">
                                <h2>Current Requests</h2>
                            </div>

                            <div class="bsr-item">
                                <div class="card fit-parent">
                                    <div class="header">
                                        <div class="title">
                                            <span>Current Requests</span>
                                        </div>

                                        <div class="more"></div>
                                    </div>

                                    <div class="body">
                                        <div class="current-request-container">
                                            <div class="cri-open">
                                                <div onclick="closeCurrentRequest()" class="cri-open-header">

                                                </div>
                                                <div class="cri-open-body">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" />
                                                                </td>
                                                                <td>
                                                                    Product
                                                                </td>
                                                                <td>
                                                                    Unit Price
                                                                </td>

                                                                <td>
                                                                    Quantity
                                                                </td>

                                                                <td>
                                                                    Subtotal
                                                                </td>

                                                                <td>
                                                                    Area
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" />
                                                                </td>
                                                                <td>
                                                                    Dual Fridge Unit
                                                                </td>
                                                                <td class="green">
                                                                    $1000
                                                                </td>

                                                                <td>
                                                                    5
                                                                </td>

                                                                <td class="green">
                                                                    $5000
                                                                </td>

                                                                <td>
                                                                    Kitchen
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" />
                                                                </td>
                                                                <td>
                                                                    Deep Freezer
                                                                </td>
                                                                <td class="green">
                                                                    $1000
                                                                </td>

                                                                <td>
                                                                    5
                                                                </td>

                                                                <td class="green">
                                                                    $5000
                                                                </td>

                                                                <td>
                                                                    Lobby
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" />
                                                                </td>
                                                                <td>
                                                                    Convection Open
                                                                </td>
                                                                <td class="green">
                                                                    $1000
                                                                </td>

                                                                <td>
                                                                    5
                                                                </td>

                                                                <td class="green">
                                                                    $5000
                                                                </td>

                                                                <td>
                                                                    Lobby
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="current-request-item cr-pending">
                                                <div class="cr-info">
                                                    <div class="cr-bubble">
                                                        <img src="<?php echo base_url() ?>assets/images/pending.png" />
                                                    </div>
                                                    <div class="cr-info-text">
                                                        <p>12/03/2020</p>
                                                        <p><b>Steelite Banqueting</b></p>
                                                        <p>Status: <b>Pending</b></p>
                                                    </div>
                                                </div>
                                                <div class="download-container">
                                                    <img src="<?php echo base_url() ?>assets/images/download.png" />
                                                </div>
                                            </div>
                                            <div onclick="openCurrentRequest('Steelite Banqueting')" class="current-request-item cr-qouted">
                                                <div class="cr-info">
                                                    <div class="cr-bubble">
                                                        <img src="<?php echo base_url() ?>assets/images/pending.png" />
                                                    </div>
                                                    <div class="cr-info-text">
                                                        <p>12/03/2020</p>
                                                        <p><b>Steelite Banqueting</b></p>
                                                        <p>Status: <b>Qouted</b></p>
                                                    </div>
                                                </div>
                                                <div class="download-container">
                                                    <img src="<?php echo base_url() ?>assets/images/download.png" />
                                                </div>
                                            </div>
                                            <div onclick="openCurrentRequest('Steelite Banqueting #1', 'success')" class="current-request-item cr-success">
                                                <div class="cr-info">
                                                    <div class="cr-bubble">
                                                        <img src="<?php echo base_url() ?>assets/images/tick.png" />
                                                    </div>
                                                    <div class="cr-info-text">
                                                        <p>12/03/2020</p>
                                                        <p><b>Steelite Banqueting #1</b></p>
                                                        <p>Status: <b>Success</b></p>
                                                    </div>
                                                </div>
                                                <div class="download-container">
                                                    <img src="<?php echo base_url() ?>assets/images/download.png" />
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
    </div>
</body>

<script type="text/javascript">
    var baseURL = "<?php echo base_url("index.php/ContactUs/"); ?>";
    var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";

    $(document).ready(function() {

        var jsonObj, projectId, BrandName, ProductName, AreaName, Quantity, ProductName, Category, Color;

        $.ajax({
            type: 'GET',
            url: baseapiURL + 'getprojectsbyuseridAPI',
            contentType: "application/json",
            success: function(response) {
                if (response) {
                    jsonObj = JSON.parse(response);
                    var hasprojects = jsonObj.getBuyer.length > 0 ? true : false;
                    var mySelect = $('#ddlProjects');
                    $.each(jsonObj.getBuyer, function(val, text) {
                        text = jsonObj.getBuyer[val].projectName
                        mySelect.append(
                            $('<option></option>').val(jsonObj.getBuyer[val]._id).html(text)
                        );
                    });

                } else {
                    showFailureDialogue("The service is temporarily unavailable, countries are not uploaded properly")
                    return;
                }
            }
        });

        $("#ddlProjects").change(function() {
            projectId = $(this).val();
            $("#txtprojectname").val($('#ddlProjects option:selected').val());

            var projectidforallboqs = {
                projectId: projectId
            };
            $.ajax({
                type: 'POST',
                url: baseapiURL + 'getallboqsbyprojectidAPI',
                contentType: "application/json",
                data: JSON.stringify(projectidforallboqs),
                success: function(response) {
                    if (response) {
                        jsonObj = JSON.parse(response);
                        $.each(jsonObj.boq, function(i, item) {
                            AreaName = item.boqItem.itemDetails.areaid;
                            Quantity = item.boqItem.itemDetails.quantity;
                            var boqListWrapper = $('#boqList');
                            var boqItem = `
                            <tr>
                                                    <td>
                                                        <input type="checkbox">
                                                    </td>
                                                    <td>${ProductName}</td>
                                                    <td>-</td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select></select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="general-form">
                                                            <div class="formRow full">
                                                                <select id="boq-qty"></select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td id="boq-category">${Category}</td>
                                                    <td id="boq-color">${color}</td>
                                                    <td>-</td>
                                                    <td id="small">
                                                        <img src="http://localhost/togglehospitality/assets/images/trash.png">
                                                    </td>
                                                </tr>
                            `;
                            $.each(item.boqItem.product, function(i, product) {
                                BrandName = product.product.BrandName;
                                if(BrandName)
                                ProductName = product.product.Name;
                                Category = product.product.Category;
                                /* $.each(product.ProductDetials, function(i, productdetials) {
                                    Color = productdetials.color;
                                    console.log(Color);
                                }); */
                            });
                        });




                    } else {
                        showFailureDialogue("The service is temporarily unavailable, countries are not uploaded properly")
                        return;
                    }
                }
            });


            /* var qstrings = {
                ProjectId: projectId
            };
            $.ajax({
                type: 'POST',
                url: baseapiURL + 'saveprojectid',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                dataType: 'json',
                success: function(response = 1) {
                    $(`#ddlProjects option[value=${projectId}]`).attr("selected", "selected");
                }
            }); */

        });
    });

    $(document).ajaxStart(function() {
        $("#loaderdiv").css("display", "flex");
    });

    $(document).ajaxComplete(function() {
        $("#loaderdiv").css("display", "none");
    });

    function showFailureDialogue(mymessage) {

        if (!alertify.errorAlert) {
            alertify.dialog('errorAlert', function factory() {
                return {
                    build: function() {
                        var errorHeader = '<span class="fa fa-times-circle fa-2x" ' +
                            'style="vertical-align:middle;color:#e10000;">' +
                            '</span> Error';
                        this.setHeader(errorHeader);
                    }
                };
            }, true, 'alert');
        }
        alertify
            .errorAlert(mymessage);
    }

    function showSuccessDialogue(mymessage) {

        if (!alertify.successAlert) {
            alertify.dialog('successAlert', function factory() {
                return {
                    build: function() {
                        var errorHeader = '<span class="fa fa-check-circle fa-2x" ' +
                            'style="vertical-align:middle;color:#3C763D;">' +
                            '</span> Success';
                        this.setHeader(errorHeader);
                    }
                };
            }, true, 'alert');
        }
        alertify
            .successAlert(mymessage);
    }
</script>

</html>