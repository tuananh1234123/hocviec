var index = 1;

function btnAddRuleOnClick() {

  var data = '<div class="row rule_row" id="rule_row_' + index + '">' +
    '                                            <div class="container">' +
    '                                                <section class="panel">' +
    '                                                    <header class="panel-heading">' +
    '                                                        <div class="row">' +
    '                                                            <div class="col-sm-1">' +
    '                                                                <button data-toggle="collapse"' +
    '                                                                    data-target="#div_add_rule_' + index + '" type="button"' +
    '                                                                    class="btn btn-primary"><i' +
    '                                                                        class="fa fa-chevron-down"></i></button>' +
    '                                                            </div>' +
    '                                                            <div class="col-sm-10">' +
    '                                                                <input class=" form-control" id="rule_name_' + index + '"' +
    '                                                                    name="rule_name_' + index + '" minlength="2" type="text"' +
    '                                                                    required="required" placeholder="Enter rule name">' +
    '                                                            </div>' +
    '                                                            <div class="col-sm-1">' +
    '                                                                <button onclick="btnCloseRuleRowOnClick(' + index + ');" type="button" class="close btn-close-fpt"><i' +
    '                                                                        class="fa fa-times fa-times-red"></i></button>' +
    '                                                            </div>' +
    '                                                        </div>' +
    '                                                    </header>' +
    '                                                    <div id="div_add_rule_' + index + '" class="panel-body collapse">' +
    '                                                        <div>' +
    '                                                            <h3>Conditions</h3>' +
    '                                                            <div class="row" id="row_rule_builder_item_' + index + '" style="display: none">' +
    '                                                                <div class="btn-group col-lg-4">' +
    '                                                                     <div class="input-group">' +
    '                                                                        <input id="sn_input_attribute_' + index + '"' +
    '                                                                            data-attribute-name="" type="text"' +
    '                                                                            class="form-control" readonly>' +
    '                                                                        <div class="spinner-buttons input-group-btn">' +
    '                                                                            <button href="#select_attribute_modal"' +
    '                                                                                data-toggle="modal" data-row-index="' + index + '"' +
    '                                                                                type="button"' +
    '                                                                                class="btn spinner-down btn-default">' +
    '                                                                                <i class="fa fa-caret-down"></i>' +
    '                                                                            </button>' +
    '                                                                        </div>' +
    '                                                                    </div>' +
    '                                                                    </div>' +
    '                                                                <div class="btn-group col-lg-4">' +
    '                                                                    <button id="btn_select_operator_' + index + '" data-toggle="dropdown"' +
    '                                                                        class="btn btn-default dropdown-toggle btn-block"' +
    '                                                                        type="button">Operators <span' +
    '                                                                            class="caret"></span></button>' +
    '                                                                    <ul id="uloperator' + index + '" role="menu"' +
    '                                                                        class="dropdown-menu btn-block dropdown-operator">' +
    '                                                                        <li><a class="dropdown_attr_value pointer"></a>' +
    '                                                                        </li>' +
    '                                                                    </ul>' +
    '                                                                </div>' +
    '                                                                <div class=" col-lg-3" id="div_condition_input_' + index + '">' +
    '                                                                     <input id="condi_text_input_' + index + '"' +
    '                                                                            name="condi_text_input_' + index + '"' +
    '                                                                            type="text" class="form-control" style="display: none">' +
    '                                                                     <input id="condi_array_input_' + index + '"' +
    '                                                                            name="condi_array_input_' + index + '"' +
    '                                                                            type="text" class="tags" value="" style="display: none">' +
    '                                                                </div>' +
    '                                                                <div class=" col-lg-1">' +
    '                                                                    <span>' +
    '                                                                        <a onclick="saveConditionRowOnClick(\'select_attribute\',' + index + ')" class="pointer"><i class="fa fa-check"></i></a>' +
    '                                                                        <a onclick="cancelConditionRowOnClick(\'select_attribute\',' + index + ')" class="pointer"><i class="fa fa-trash-o"></i></a>' +
    '                                                                    </span>' +
    '                                                                </div>' +
    '                                                            </div>' +
    '                                                            <br>' +
    '                                                            <div class="row">' +
    '                                                               <div class="container" id="display_condition_text_' + index + '">' +
    '                                                               </div>' +
    '                                                            </div>' +
    '                                                            <br>' +
    '                                                            <div class="row">' +
    '                                                                <div class="container">' +
    '                                                                    <div class="btn-group">' +
    '                                                                        <button data-toggle="dropdown"' +
    '                                                                            class="btn btn-primary dropdown-toggle btn-sm btnaddconditions"' +
    '                                                                            type="button"><i class="fa fa-plus"></i> Add' +
    '                                                                            Conditions' +
    '                                                                            <span class="caret"></span></button>' +
    '                                                                         <ul role="menu" class="dropdown-menu">' +
    '                                                                            <li>' +
    '                                                                                <a class="attr_condition_option pointer"' +
    '                                                                                    data-value="coupon_is_valid">A' +
    '                                                                                    Coupon Code' +
    '                                                                                    is valid *</a>' +
    '                                                                            </li>' +
    '                                                                            <li>' +
    '                                                                                <a class="attr_condition_option pointer"' +
    '                                                                                    data-value="referral_code_is_valid">A' +
    '                                                                                    Referral Code is valid *</a>' +
    '                                                                            </li>' +
    '                                                                            <li>' +
    '                                                                                <a href="#select_attribute_modal"' +
    '                                                                                    data-toggle="modal"' +
    '                                                                                    data-select-attribute-index="' + index + '"' +
    '                                                                                    class="attr_condition_option pointer"' +
    '                                                                                    data-value="select_attribute">Select' +
    '                                                                                    Attribute</a>' +
    '                                                                            </li>' +
    '                                                                            <li>' +
    '                                                                                <a class="attr_condition_option pointer"' +
    '                                                                                    data-value="system_event_trigger">Select' +
    '                                                                                    system event trigger</a>' +
    '                                                                            </li>' +
    '                                                                            <li><a class="attr_condition_option pointer"' +
    '                                                                                    data-value="check_if_a_custom_attribute_exists">Check' +
    '                                                                                    if a custom attribute exists</a>' +
    '                                                                            </li>' +
    '                                                                        </ul>' +
    '                                                                    </div>' +
    '                                                                    <span> or <a class="pointer">Always Trigger' +
    '                                                                            Effects</a></span>' +
    '                                                                </div>' +
    '                                                            </div>' +
    '                                                        </div>' +
    '                                                        <hr>' +
    '                                                        <div>' +
    '                                                            <h3>Effects</h3>' +
    '                                                            <div class="row" id="row_effect_builder_item_' + index + '">' +
    '                                                                <div id="row_set_a_discount_' + index + '" style="display: none">' +
    '                                                                    <div' +
    '                                                                        class="col-xs-11 col-sm-11 col-md-11 col-lg-11">' +
    '                                                                        <form role="form" id="form_set_a_discount_' + index + '">' +
    '                                                                            <div class="form-group">' +
    '                                                                                <label for="effect_name_' + index + '">Name</label>' +
    '                                                                                <input type="text" class="form-control"' +
    '                                                                                    id="effect_name_' + index + '"' +
    '                                                                                    placeholder="Enter effect name">' +
    '                                                                            </div>' +
    '                                                                            <div class="form-group">' +
    '                                                                                <label for="effect_value_' + index + '">Discount' +
    '                                                                                    value</label>' +
    '                                                                                <textarea class="form-control" placeholder="Enter effect value" name="effect_value_' + index + '"' +
    '                                                                                    id="effect_value_' + index + '" cols="30" rows="3"></textarea>' +
    '                                                                            </div>' +
    '                                                                        </form>' +
    '                                                                    </div>' +
    '                                                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">' +
    '                                                                        <a onclick="btnSaveEffectRowOnClick(\'set_a_discount\',' + index + ')"' +
    '                                                                            class="pointer"><i class="fa fa-check"></i></a>' +
    '                                                                        <a onclick="btnCancelEffectRowOnClick(\'set_a_discount\',' + index + ')"' +
    '                                                                            class="pointer"><i class="fa fa-trash-o"></i></a>' +
    '                                                                    </div>' +
    '                                                                </div>' +
    '                                                            </div>' +
    '                                                            <br>' +
    '                                                            <div class="row">' +
    '                                                                <div class="container" id="display_effect_text_' + index + '">' +
    '                                                                </div>' +
    '                                                            </div>' +
    '                                                            <br>' +
    '                                                            <div class="btn-group">' +
    '                                                                <button data-toggle="dropdown"' +
    '                                                                    class="btn btn-primary dropdown-toggle btn-sm"' +
    '                                                                    type="button"><i class="fa fa-plus"></i> Add Effect' +
    '                                                                    <span class="caret"></span></button>' +
    '                                                                <ul role="menu" class="dropdown-menu">' +
    '                                                                    <li>' +
    '                                                                        <a class="effect_option_item pointer" onclick="dropdownEffectItemOnClick(\'set_a_per_item_discount\',' + index + ');"' +
    '                                                                            data-value="set_a_per_item_discount"' +
    '                                                                            >Set a per item discount</a>' +
    '                                                                    </li>' +
    '                                                                    <li>' +
    '                                                                        <a class="effect_option_item pointer" onclick="dropdownEffectItemOnClick(\'set_a_discount\',' + index + ');"' +
    '                                                                            data-value-string="set_a_discount" >Set a' +
    '                                                                            discount</a>' +
    '                                                                    </li>' +
    '                                                                    <li>' +
    '                                                                        <a class="effect_option_item pointer" onclick="dropdownEffectItemOnClick(\'update_a_value\',' + index + ');"' +
    '                                                                            data-value="update_a_value" >Update' +
    '                                                                            a value</a>' +
    '                                                                    </li>' +
    '                                                                    <li>' +
    '                                                                        <a class="effect_option_item pointer" onclick="dropdownEffectItemOnClick(\'set_a_notification\',' + index + ');"' +
    '                                                                            data-value="set_a_notification" >Set' +
    '                                                                            a notification</a>' +
    '                                                                    </li>' +
    '                                                                    <li>' +
    '                                                                        <a class="effect_option_item pointer" onclick="dropdownEffectItemOnClick(\'create_a_referral_code\',' + index + ');"' +
    '                                                                            data-value="create_a_referral_code"' +
    '                                                                            >Create a referral code *</a>' +
    '                                                                    </li>' +
    '                                                                    <li>' +
    '                                                                        <a class="effect_option_item pointer" onclick="dropdownEffectItemOnClick(\'create_coupon\',' + index + ');"' +
    '                                                                            data-value="create_coupon" >Create' +
    '                                                                            coupon *</a>' +
    '                                                                    </li>' +
    '                                                                    <li>' +
    '                                                                        <a class="effect_option_item pointer" onclick="dropdownEffectItemOnClick(\'webhooks\',' + index + ');"' +
    '                                                                            data-value="webhooks" >Webhooks' +
    '                                                                            *</a>' +
    '                                                                    </li>' +
    '                                                                </ul>' +
    '                                                            </div>' +
    '                                                        </div>' +
    '                                                    </div>' +
    '                                                </section>' +
    '                                            </div>' +
    '                                        </div>';



  $(data).appendTo("#rule_builder");
  index++;

  $(".attr_condition_option").click(function (e) {
    var index = $(this).data('select-attribute-index');
    $("#modal_select_attribute").data("index-select", index);
  });
}

// Start rule builder
function btnCancelRulesBuilderOnClick() {
  $(".rule_row").slideUp("fast", function () { $($(".rule_row")).remove(); });
}
// End rule builder

// Start rule panel
function btnCloseRuleRowOnClick(indexrule) {
  $("#rule_row_" + indexrule).slideUp("fast", function () { $($("#rule_row_" + indexrule)).remove(); });
}
// End rule panel

// Start row click on table modal select attribute
$("#select_attribute_table > tbody > tr").click(function (target) {
  var attributename = $(this).find("td:first").data('value');
  var name = $(this).find("td:first").html();
  var indexrule = $("#modal_select_attribute").data("index-select");

  $("#select_attribute_modal").modal("hide");
  $("#sn_input_attribute_" + indexrule).val(name);
  $("#sn_input_attribute_" + indexrule).data("attribute-name", attributename);

  clearDataConditionInputRow(indexrule);
  // $("#uloperator" + indexrule).html("");

  var dataHtml = getVariableHtml(attributename, indexrule);
  $("#uloperator" + indexrule).html(dataHtml);

  $("#row_rule_builder_item_" + indexrule).slideUp("normal").show("normal");
});
// End row click on table modal select attribute

function dropdownOperatorItemOnClick(operatorname, indexrule) {
  var operator_name_text = $("#" + operatorname).html();

  $("#btn_select_operator_" + indexrule).html(operator_name_text + ' <span class="caret"></span>');
  // $("#btn_select_operator_" + indexrule).val(operatorname);
  $("#btn_select_operator_" + indexrule).data("operator-name", operatorname);

  var input_array = ["condi_text_input_", "condi_array_input_"];

  var string_input_type_array = ["isEqualTo", "isNotEqualTo", "contains", "doesNotContain", "before", "after"];
  var array_input_type_array = ["isOneOf", "isNotOneOf"];

  if ($.inArray(operatorname, string_input_type_array) >= 0) {
    showInputConditions(input_array, "condi_text_input_", indexrule);
  } else if ($.inArray(operatorname, array_input_type_array) >= 0) {
    showInputConditions(input_array, "condi_array_input_", indexrule);

    $('input.tags').tagsInput({ width: 'auto' });

    var url = "js/jquery-tags-input/jquery.tagsinput.js";
    $.getScript(url, function () { });
  }
}
// Start condition
condition_index = 1;
function saveConditionRowOnClick(conditiontype, indexrule) {
  var attribute_name_text = $("#sn_input_attribute_" + indexrule).val();
  var attribute_name = $("#sn_input_attribute_" + indexrule).data("attribute-name");
  var operator = $("#btn_select_operator_" + indexrule).val();
  var operator_text = $("#btn_select_operator_" + indexrule).text().toLowerCase();
  var text_display = "";

  var session_data_json = "";

  if (operator == "isEqualTo") {
    var condi_text_input = $("#condi_text_input_" + indexrule).val();

    session_data_json = {
      "select_attribute": [
        {
          "condition_index": condition_index,
          "attribute": attribute,
          "operator": operator,
          "condition_input_type": "string",
          "condition_input": condi_text_input
        }
      ]
    };

    text_display = "<span id='condition_row_" + condition_index + "'><b>" + attribute + "</b> " + operator_text + " <b>" + condi_text_input +
      '</b> <a class="pointer" onclick="btnEditConditionRowOnClick(\'' + target + '\',' + condition_index + ',' + indexrule + ')"><i class="fa fa-pencil"></i></a><br>';
  } else if (operator == "isOneOf") {
    var condi_array_input = $("#condi_array_input_" + indexrule).val();

    session_data_json = {
      "select_attribute": [
        {
          "condition_index": condition_index,
          "attribute": attribute,
          "operator": operator,
          "condition_input_type": "array",
          "condition_input": condi_array_input
        }
      ]
    };

    text_display = "<span id='condition_row_" + condition_index + "'><b>" + attribute + "</b> " + operator_text + " <b>" + condi_array_input +
      '</b> <a class="pointer" onclick="btnEditConditionRowOnClick(\'' + target + '\',' + condition_index + ',' + indexrule + ')"><i class="fa fa-pencil"></i></a><br>';
  }


  if (typeof (Storage) !== "undefined") {
    sessionStorage.session_data = JSON.stringify(session_data_json);
  }

  $("#display_condition_text_" + indexrule).prepend(text_display);
  cancelConditionRowOnClick(target, indexrule);
  condition_index++;
}

function cancelConditionRowOnClick(target, indexrule) {
  clearDataConditionInputRow(indexrule);
  $("#row_rule_builder_item_" + indexrule).slideDown("normal").hide("normal");
}

function btnEditConditionRowOnClick(target, conditionindex, indexrule) {
  switch (target) {
    case "select_attribute":
      $("#row_rule_builder_item_" + indexrule).slideUp("normal").show("normal");
      $("#condition_row_" + conditionindex).slideUp("fast", function () { $($("#condition_row_" + conditionindex)).remove(); });

      var attribute = "";
      var operator = "";
      var session_data_json = JSON.parse(sessionStorage.session_data);

      session_data_json.select_attribute.forEach(function (item) {
        if (item.condition_index == conditionindex) {
          attribute = item.attribute;
          operator = item.operator;
          condition_input_type = item.condition_input_type;
          condition_input = item.condition_input;
        }
      });

      console.log(session_data_json);

      $('#sn_input_attribute_' + indexrule).val(attribute);

      var dataHtml = '<li><a id="isEqualTo" class="dropdown_attr_value pointer" data-value="isEqualTo" onclick="dropdownOperatorItemOnClick(\'isEqualTo\', ' + indexrule + ');">is equal to</span></a></li>' +
        '<li><a id="isOneOf" class="dropdown_attr_value pointer" data-value="isOneOf" onclick="dropdownOperatorItemOnClick(\'isOneOf\', ' + indexrule + ');">is one of</span></a></li>';

      if (attribute == "Session plan type") {
        $("#btn_select_operator_" + indexrule).html(operator + ' <span class="caret"></span>');
        $("#uloperator" + indexrule).html(dataHtml);
      }

      if (condition_input_type == "string") {
        $("#condi_text_input_" + indexrule).val(condition_input);
        $("#condi_array_input_" + indexrule).val();
      } else if (condition_input_type == "array") {
        $("#condi_text_input_" + indexrule).val();
        $("#condi_array_input_" + indexrule).val(condition_input);

        $('input.tags').tagsInput({ width: 'auto' });

        var url = "js/jquery-tags-input/jquery.tagsinput.js";
        $.getScript(url, function () { });
      }
      break;
    case "":
      break;
  }
}
// End condition

// Start effect
function dropdownEffectItemOnClick(target, indexrule) {
  switch (target) {
    case "set_a_per_item_discount":
      break;
    case "set_a_discount":
      $("#row_set_a_discount_" + indexrule).slideUp("normal").show("normal");
      break;
    case "update_a_value":
      break;
    case "set_a_notification":
      break;
    case "create_a_referral_code":
      break;
    case "create_coupon":
      break;
    case "webhooks":
      break;
  }
};

var effect_index = 1;
function btnSaveEffectRowOnClick(target, indexrule) {
  var effect_name = $("#effect_name_" + indexrule).val();
  var effect_value = $("#effect_value_" + indexrule).val();
  var text_display = "";

  var session_data_json = {
    "set_a_discount": [
      {
        "effect_index": effect_index,
        "name": effect_name,
        "effect_value": effect_value
      }
    ]
  };

  if (typeof (Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
    } else {
      sessionStorage.session_data = JSON.stringify(session_data_json);
    }
  }

  text_display = '<span id="effect_row_' + effect_index + '">Set a discount <b>' + effect_value + ' <a class="pointer" onclick="btnEditEffectRowOnClick(\'' + target + '\',' + effect_index + ',' + indexrule + ')"><i class="fa fa-pencil"></i></a><br></span>';

  $("#display_effect_text_" + indexrule).append(text_display);
  btnCancelEffectRowOnClick(target, indexrule);
  effect_index++;
}

function btnCancelEffectRowOnClick(target, indexrule) {
  $("#form_" + target + "_" + indexrule).find("input[type=text], textarea").val("");
  $("#row_" + target + "_" + indexrule).slideDown("normal").hide("normal");
}

function btnEditEffectRowOnClick(target, effectindex, indexrule) {
  switch (target) {
    case "set_a_per_item_discount":
      break;
    case "set_a_discount":
      $("#row_set_a_discount_" + indexrule).slideUp("normal").show("normal");
      $("#effect_row_" + effectindex).slideUp("fast", function () { $($("#effect_row_" + effectindex)).remove(); });

      var effect_name = "";
      var effect_value = "";
      var session_data_json = JSON.parse(sessionStorage.session_data);

      session_data_json.set_a_discount.forEach(function (item) {
        if (item.effect_index == effectindex) {
          effect_name = item.name;
          effect_value = item.effect_value
        }
      });

      $('#effect_name_' + indexrule).val(effect_name);
      $('#effect_value_' + indexrule).val(effect_value);
      break;
    case "update_a_value":
      break;
    case "set_a_notification":
      break;
    case "create_a_referral_code":
      break;
    case "create_coupon":
      break;
    case "webhooks":
      break;
  }
}
// end effect

// Start utility
function showInputConditions(inputtypearray, showinput, indexrule) {
  inputtypearray.forEach(function (item) {
    $("#" + item + indexrule).hide();
    $("#" + item + indexrule).val("");
  });

  if (showinput == "condi_text_input_") {
    $("#" + showinput + indexrule).slideDown("normal").show("normal");
  } else if (showinput == "condi_array_input_") {
    $("#" + showinput + indexrule).hide();
    $("#" + showinput + indexrule + "_tagsinput").slideDown("normal").show("normal");
  }
  
  $("#condi_array_input_" + indexrule + "_tagsinput").remove();
}

function clearDataConditionInputRow(indexrule) {
  $("#condi_text_input_" + indexrule).val("");
  $("#condi_array_input_" + indexrule).val("");
  $("#btn_select_operator_" + indexrule).html('Operators <span class="caret"></span>');

  $("#condi_array_input_" + indexrule + "_tagsinput").remove();
};

function getVariableHtml(variablename, indexrule) {
  var operators_json = {
    "sessionPlanType": ["isEqualTo", "isNotEqualTo", "isOneOf", "isNotOneOf", "contains", "doesNotContain"],
    "profilePlanType": ["contains", "doesNotContain"],
    "profileJoinDate": ["before", "after"]
  };

  var htmldata = "";

  switch (variablename) {
    case "sessionPlanType":
      operators_json.sessionPlanType.forEach(function (item) {
        htmldata += '<li><a id="' + item + '" class="dropdown_attr_value pointer" data-value="' + item + '" onclick="dropdownOperatorItemOnClick(\'' + item + '\', ' + indexrule + ');">' + convertLowerFirstToNo(item) + '</span></a></li>';
      });
      break;
    case "profilePlanType":
      operators_json.profilePlanType.forEach(function (item) {
        htmldata += '<li><a id="' + item + '" class="dropdown_attr_value pointer" data-value="' + item + '" onclick="dropdownOperatorItemOnClick(\'' + item + '\', ' + indexrule + ');">' + convertLowerFirstToNo(item) + '</span></a></li>';
      });
      break;
    case "profileJoinDate":
      operators_json.profileJoinDate.forEach(function (item) {
        htmldata += '<li><a id="' + item + '" class="dropdown_attr_value pointer" data-value="' + item + '" onclick="dropdownOperatorItemOnClick(\'' + item + '\', ' + indexrule + ');">' + convertLowerFirstToNo(item) + '</span></a></li>';
      });
      break;
  }
  return htmldata;
};

function convertLowerFirstToNo(string) {
  var result = string.replace(/([A-Z])/g, " $1");
  return result.toLowerCase();
}
// End utility