<script type="text/javascript">

function addField() {
	var telnum = parseInt($('#add_field_area').find('div.add:last').attr('id').slice(3))+1;
	$('div#add_field_area').append('<div id="add'+telnum+'" class="add">'+
        '<label> Поле №'+telnum+'</label> '+
        '<select  id="sdd'+telnum+'" name="val'+telnum+'" >'+
            '<option value="text">text</option>'+
            '<option value="text_and_Code">text_and_Code</option>'+
            '<option value="header">header</option>'+
            '<option value="tips">tips</option>'+
            '<option value="attention">attention</option>'+
            '<option value="comparison">comparison</option>'+
            '<option value="ad_Unit">ad_Unit</option>'+
        '</select> '+
        '<input type="text" width="120" name="val'+telnum+'" id="val" onblur="writeFieldsVlues();"  value=""/>'+
        '<div class="deletebutton" onclick="deleteField('+telnum+');"></div></div>');
}

function deleteField (id) {
	$('div#add'+id).remove();
	writeFieldsVlues();
}

function writeFieldsVlues () {
	var str = [];
	var tel = '';
	for(var i = 0; i<$("input#val").length; i++) {
		tel = $($("input#val")[i]).val();
		if (tel !== '') {
			str.push($($("input#val")[i]).val());
		}
 	}
	$("input#values").val(str.join("|"));
}

function saveField() {
    var str = [];
    var inputVal = '';
    var selectVal = '';

    for (var i = 0; i < $("input#val").length; i++) {
        inputVal = $($("input#val")[i]).val();
        selectVal = $($("select")[i]).val();
        if (inputVal !== '')
            if (selectVal !== '') {
                str.push($($("select")[i]).val());
                str.push($($("input#val")[i]).val());
                $("input#values").val(str.join("|"));

            }
    }

}

</script>
<style>
input {
	height: 20px;
	margin: 5px;
	width:400px;
}
.addbutton {
	text-align: center;
	vertical-align:middle;
	font-size: 13px;
	width: 283px;
	border: 1px solid #70A9FD;
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	border-radius: 7px;
	cursor: pointer;
	margin: 2px 0 0 250px;
	color: #326DC5;
	padding: 4px;
	background-color:#BED6FF;
}

.deletebutton {
	width: 20px;
	height: 22px;
	cursor: pointer;
	margin: 5px;
	display:inline-block;
	background: url(Content/images/delete.png) repeat;
	background-position: center center;
	background-repeat: no-repeat;
	position:absolute;
	top: 1px;
	left: 600px;
}

.add {
	position:relative;
}
</style>
</head>

<body>

<form action="" method="post" id="idForm" name="Form">

        <div id="add_field_area">
			<?
            $array = '';
            $values = explode("|",$array);
            $n = 0;
            foreach ($values as $value) {
            $n++;
                if ($n == 1) {
            ?><div id="add1" class="add">
                    <label> Поле №1</label>
                    <select  id="sdd1" name="val1" >
                        <option value="text">text</option>
                        <option value="text_and_Code">text_and_Code</option>
                        <option value="header">header</option>
                        <option value="tips">tips</option>
                        <option value="attention">attention</option>
                        <option value="comparison">comparison</option>
                        <option value="ad_Unit">ad_Unit</option>
                    </select>
                    <input type="text" width="120" name="val1" id="val" onblur="writeFieldsVlues();"  value="<?=$value?>"/>
              </div>
                 <?
                } else {			
                ?>
                <div id="add<?=$n?>" class="add">
                    <label> Поле №<?=$n?></label>
                    <select  id="sdd<?=$n?>" name="val<?=$n?>" class="cls<?=$n?>" >
                        <option value="text">text</option>
                        <option value="text_and_Code">text_and_Code</option>
                        <option value="header">header</option>
                        <option value="tips">tips</option>
                        <option value="attention">attention</option>
                        <option value="comparison">comparison</option>
                        <option value="ad_Unit">ad_Unit</option>
                    </select>
                    <input type="text" width="120" name="val<?=$n?>" id="val" onblur="writeFieldsVlues();"  value="<?=$value?>"/>
                    <div class="deletebutton" onclick="deleteField(<?=$n?>);"></div>
                    
                </div>
                
                <?	
                
                }
            }
             
                ?>
        </div>
        <div onclick="addField();" class="addbutton">Добавить новое поле</div>
        <div onclick="saveField();" class="addbutton">Сохранить</div>
        <input type="hidden" name="values" id="values"  value="<?=$array?>"/>

</form>

</body>

