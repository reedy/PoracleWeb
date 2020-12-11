
<?php

    $form_name=get_form_name($row['pokemon_id'],$row['form']);

    // Add Hidden Fancy Box Content for Pokemons

    echo "
    <div style='display: none;' id='$pkm_unique_id'>
    <form action='./form_action.php' method='POST'>
    ";

    if ( $row['pokemon_id'] == '0' ) {
      echo "<center><font size=8><strong>ALL</strong></font></center>";
    } else {
      echo "<td><center>$PkmnImg_100</center></td>";
    }

    echo "

        <br>
        <input type='hidden' id='type' name='type' value='monsters'>
        <input type='hidden' id='pokemon_id' name='pokemon_id' value='".$row['pokemon_id']."'>
        <input type='hidden' id='cur_form' name='cur_form' value='".$row['form']."'>
        <input type='hidden' id='cur_distance' name='cur_distance' value='".$row['distance']."'>
        <input type='hidden' id='cur_min_iv' name='cur_min_iv' value='".$row['min_iv']."'>
        <input type='hidden' id='cur_max_iv' name='cur_max_iv' value='".$row['max_iv']."'>
        <input type='hidden' id='cur_min_cp' name='cur_min_cp' value='".$row['min_cp']."'>
        <input type='hidden' id='cur_max_cp' name='cur_max_cp' value='".$row['max_cp']."'>
        <input type='hidden' id='cur_min_level' name='cur_min_level' value='".$row['min_level']."'>
        <input type='hidden' id='cur_max_level' name='cur_max_level' value='".$row['max_level']."'>
        <input type='hidden' id='cur_min_weight' name='cur_min_weight' value='".$row['min_weight']."'>
        <input type='hidden' id='cur_max_weight' name='cur_max_weight' value='".$row['max_weight']."'>
        <input type='hidden' id='cur_gender' name='cur_gender' value='".$row['gender']."'>
        <input type='hidden' id='cur_atk' name='cur_atk' value='".$row['atk']."'>
        <input type='hidden' id='cur_def' name='cur_def' value='".$row['def']."'>
        <input type='hidden' id='cur_sta' name='cur_sta' value='".$row['sta']."'>
        <input type='hidden' id='cur_max_atk' name='cur_max_atk' value='".$row['max_atk']."'>
        <input type='hidden' id='cur_max_def' name='cur_max_def' value='".$row['max_def']."'>
        <input type='hidden' id='cur_max_sta' name='cur_max_sta' value='".$row['max_sta']."'>
        <input type='hidden' id='cur_great_league_ranking' name='cur_great_league_ranking' value='".$row['great_league_ranking']."'>
        <input type='hidden' id='cur_great_league_ranking_min_cp' name='cur_great_league_ranking_min_cp' value='".$row['great_league_ranking_min_cp']."'>
        <input type='hidden' id='cur_ultra_league_ranking' name='cur_ultra_league_ranking' value='".$row['ultra_league_ranking']."'>
        <input type='hidden' id='cur_ultra_league_ranking_min_cp' name='cur_ultra_league_ranking_min_cp' value='".$row['ultra_league_ranking_min_cp']."'>

	<table width=130% style='margin-left:-30px;'>

	<tr><td>
        <div class='tooltip'><i class='fa fa-question-circle' style='color:darkgreen;'></i><span class='tooltiptext'>".$tt_distance."</span></div>
	<label for='fname'>Distance</label>
        </td><td>
	<input type='number' id='distance' name='distance' value='".$row['distance']."' style='width:80px' min='0'>&nbsp;meters<br>
        </td></tr>

	<tr><td>
        <div class='tooltip'><i class='fa fa-question-circle' style='color:darkgreen;'></i><span class='tooltiptext'>".$tt_iv_pkmn."</span></div>
        <label for='fname'>IV</label>
        </td><td>
        <label for='fname'>Min</label>
	<input type='number' id='min_iv' name='min_iv' size=1 value='".$row['min_iv']."' min='-1' max='100'>
        <label for='fname'>Max</label>
	<input type='number' id='max_iv' name='max_iv' size=1 value='".$row['max_iv']."' min='-1' max='100'><br>
        </td></tr>

        <tr><td>
        <label for='fname'>CP</label>
        </td><td>
        <label for='fname'>Min</label>
	<input type='text' id='min_cp' name='min_cp' size=1 value='".$row['min_cp']."' min='0' max='9000'>
        <label for='fname'>Max</label>
	<input type='text' id='max_cp' name='max_cp' size=1 value='".$row['max_cp']."' min='0' max='9000'><br>
        </td></tr>

        <tr><td>
        <label for='fname'>Level</label>
        </td><td>
        <label for='fname'>Min</label>
        <input type='number' id='min_level' name='min_level' size=1 value='".$row['min_level']."' min='0' max='50'>
        <label for='fname'>Max</label>
        <input type='number' id='max_level' name='max_level' size=1 value='".$row['max_level']."' min='0' max='50'><br>
        </td></tr>

        <tr><td>
        <label for='fname'>Weight</label>
        </td><td>
        <label for='fname'>Min</label>
        <input type='number' id='min_weight' name='min_weight' size=2 value='".$row['min_weight']."' min='0' max='9000000'>
        <label for='fname'>Max</label>
        <input type='number' id='max_weight' name='max_weight' size=4 value='".$row['max_weight']."' style='width:7em' min='0' max='9000000'><br>
        </td></tr>

        <tr><td>
        <label for='fname'>Stats</label>
        </td><td>
        <label for='fname'>Min</label>
        <label for='fname'>Atk</label>
        <input type='number' id='atk' name='atk' size=1 value='".$row['atk']."' style='width:2em' min='0' max='15'>
        <label for='fname'>Def</label>
        <input type='number' id='def' name='def' size=1 value='".$row['def']."' style='width:2em' min='0' max='15'>
        <label for='fname'>Sta</label>
	<input type='number' id='sta' name='sta' size=1 value='".$row['sta']."' style='width:2em' min='0' max='15'><br>
        <label for='fname'>Max</label>
        <label for='fname'>Atk</label>
        <input type='number' id='max_atk' name='max_atk' size=1 value='".$row['max_atk']."' style='width:2em' min='0' max='15'>
        <label for='fname'>Def</label>
        <input type='number' id='max_def' name='max_def' size=1 value='".$row['max_def']."' style='width:2em' min='0' max='15'>
        <label for='fname'>Sta</label>
        <input type='number' id='max_sta' name='max_sta' size=1 value='".$row['max_sta']."' style='width:2em' min='0' max='15'><br>

        </td></tr>

        <tr><td>
        <label for='fname'>PvP Great</label>
        </td><td>
        <label for='fname'>Min Rank</label>
        <input type='number' id=great_league_ranking'' name='great_league_ranking' size=1 value='".$row['great_league_ranking']."' min='0' max='4096'>
        <label for='fname'>Min CP</label>
        <input type='number' id='great_league_ranking_min_cp' name='great_league_ranking_min_cp' size=1 value='".$row['great_league_ranking_min_cp']."' min='0' max='4096'><br>
        </td></tr>

        <tr><td>
        <label for='fname'>PvP Ultra</label>
        </td><td>
        <label for='fname'>Min Rank</label>
        <input type='number' id=ultra_league_ranking'' name='ultra_league_ranking' size=1 value='".$row['ultra_league_ranking']."' min='0' max='4096'>
        <label for='fname'>Min CP</label>
        <input type='number' id='ultra_league_ranking_min_cp' name='ultra_league_ranking_min_cp' size=1 value='".$row['ultra_league_ranking_min_cp']."' min='0' max='4096'><br>
        </td></tr>

        <tr><td>
        <label for='fname'>Form</label>
	</td><td style='max-width: 180px;'>
        ";
        $forms=get_all_forms($row['pokemon_id']);    
        ksort($forms);
        foreach($forms as $key => $value) {
        if ($key == $row['form']) { $checked = 'checked'; } else { $checked = ''; }
          echo "<div style='display:inline-block;'>";
          echo "<input type='radio' name='form' id='form_".$key."' value='form_".$key."' $checked/>";
          echo "<label for='form_".$key."'>$value</label>";
	  echo "</div>\n";
        }
	echo "</td></tr>

	<tr><td>";
        if ($row['gender'] == 0) { $checked0 = 'checked'; } else { $checked0 = ''; }
        if ($row['gender'] == 1) { $checked1 = 'checked'; } else { $checked1 = ''; }
        if ($row['gender'] == 2) { $checked2 = 'checked'; } else { $checked2 = ''; }
        echo "
        <label for='fname'>Gender</label>
        </td><td style='max-width: 180px;'>
        <div style='display:inline-block;'>
	<input type='radio' name='gender' id='gender_0' value='gender_0' $checked0 />
	<label for='gender_0'>All</label>
	</div>
        <div style='display:inline-block;'>
        <input type='radio' name='gender' id='gender_1' value='gender_1' $checked1 />
        <label for='gender_1'>Male</label>
        </div>
        <div style='display:inline-block;'>
        <input type='radio' name='gender' id='gender_2' value='gender_2' $checked2 />
        <label for='gender_2'>Female</label>
        </div>
        </td></tr>

        <tr><td>";
        if ($row['clean'] == 0) { $checked0 = 'checked'; } else { $checked0 = ''; }
        if ($row['clean'] == 1) { $checked1 = 'checked'; } else { $checked1 = ''; }
        echo "
        <div class='tooltip'><i class='fa fa-question-circle' style='color:darkgreen;'></i><span class='tooltiptext'>".$tt_clean_pkmn."</span></div>
	<label for='fname'>Clean</label>
        </td><td style='max-width: 180px;'>
        <div style='display:inline-block;'>
        <input type='radio' name='clean' id='clean_0' value='clean_0' $checked0 />
        <label for='clean_0'>No</label>
        </div>
        <div style='display:inline-block;'>
        <input type='radio' name='clean' id='clean_1' value='clean_1' $checked1 />
        <label for='clean_1'>Yes</label>
        </div>
        </td></tr>

        </table>
   
        <br><center>
	<input type='submit' name='update' value='Update' class='button_update'>
	<input type='submit' name='delete' value='Delete' class='button_delete'>
        </center>

    </form>
    </div>
    ";

?>
