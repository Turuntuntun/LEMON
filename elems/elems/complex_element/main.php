 <div class = 'sidebar'>
     <div class = 'side_line1'>
         <?php require_once('/../chi-chi/main.php');?>
         <div class = 'sidebar_recipe'>
             <div class = 'meny_side_rep'>
            	<p>Recipe</p>
            	<div class = 'icon_sidebar'>
            	</div>
             </div>
             <hr class = 'smal_hr'>
             <div class = 'easy_middl_long'>
                 <div class = 'easy'>Easy</div><div class = 'middle'>Middle</div><div class = 'long'>Long</div>
             </div>
             <div class = 'sidebar_recipe_recipes'>
            	<div class = 'recipe_one'>
            		<div class = 'side_rec_one_logo'>
            		</div>
            		<div class = 'side_rec_by_text'>
            			<p>by <span class = 'bold'>Smuckersreg Toppings</span></p>
            			<p><span class = 'big_bold'>Thanks for the recipe lorem ipsum bla bla bla Thanks for the recipe lore</span></p>
            		</div>
            	</div>
            	<div class = 'recipe_one'>
            		<div class = 'side_rec_two_logo'>
            		</div>
            		<div class = 'side_rec_by_text'>
            			<p>by <span class = 'bold'>Smuckersreg Toppings</span></p>
            			<p><span class = 'big_bold'>Thanks for the recipe lorem nks for the recipe</span></p>
            		</div>
            	</div>
            	<div class = 'recipe_one'>
            		<div class = 'side_rec_three_logo'>
            		</div>
            		<div class = 'side_rec_by_text'>
            			<p>by <span class = 'bold'>Smuckersreg Toppings</span></p>
            			<p><span class = 'big_bold'>Thanks for the recipe lorem nks for the recipe</span></p>
            		</div>
                </div>
            </div>
            <input type = 'button' value = 'VIEM MORE' class = 'viem_more'>
         </div>

         <div class = 'popular_now'>
             <div class = 'Pop'>
           	    <p>Popular Now</p>
             </div>
             <hr class = 'white_hr'>
             <div class = 'vanila'>
                 <div class = 'vanila_zag'>
           	   	    <p>Vanila Frozen Coffee</p>
           	     </div>
           	     <div class = 'vanila_text'>
           	        <p>Mix coffee, sugar and creamer. <br> Pour into blender and add ice cubes. <br> Blend until smooth.</p>
           	     </div>
             </div>
             <div class = 'pop_inp_men'>
                 <input type = 'button' value = 'GET IT RECIPE'>
           	     <div class = "small_zag">
		            <div class = "icon_time"></div>
		            <span class = "mins">6mins |</span>
		            <div class = "comment_icon"></div> 
		            <span class = "mins">240 </span> 
		            <div class = "viem_icon"></div>
		            <span class ="mins">400</span>
		         </div>
              </div>
         </div>
     </div>

      <div class = 'side_line2'>
    	    <div class = 'target'>
    	  	    <div class = 'meny_side_rep'>
                    <p>Target</p>
                    <div class = 'icon_sidebar'>
                    </div>
                </div>
                <hr class = 'smal_hr2'>
                <div class = 'target_res'>
                    <p>Presentation line</p>
                </div>
                <div class = 'target_div'>
                    <div class = 'target_div_smal'>
                        <div class = 'target_div1' id = 'target_first_div'>
                            <div class = 'target_div1_border_back'>
                                <div class = 'target_div1_border'>
                                    <p>19%</p>
                                </div>
                            </div>
                            <div class = 'target_div1_block'>
                                <p class = 'targ_zag'>Housewifes</p>
                                <p class = 'targ_text'>Lorem ipsum dolor sit amet, prima ceteros.</p>
                            </div>
                        </div>
                        <div class = 'target_div1'>
                            <div class = 'target_div2_border_back'>
                                <div class = 'target_div1_border'>
                                    <p>65%</p>
                                </div>
                            </div>
                            <div class = 'target_div1_block'>
                                <p class = 'targ_zag'>Newlyweds</p>
                                <p class = 'targ_text'>Has brute elitr deserunt ea, assentior eloquen- tiam neglegentur te sed.</p>
                            </div>
                        </div>
                        <div class = 'target_div1'>
                            <div class = 'target_div3_border_back'>
                                <div class = 'target_div1_border'>
                                    <p>50%</p>
                                </div>
                            </div>
                            <div class = 'target_div1_block'>
                                <p class = 'targ_zag'>Business lady</p>
                                <p class = 'targ_text'>Ei nam primis putent signiferumque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = 'tags_calend'>
                <div class = 'tags'>
                    <div class = 'void'>
                    </div>
                    <div class = 'meny_side_rep1'>
                        <p>Tags</p>
                    </div>
                    <hr class = 'smal_hr2'>
                    <div class = 'tags_text'>
                        <?php
                            $tags = ['YUMMY','SWEET','DINNER','LUNCH','BREAKFAST','FRESH','TASTY','DELISH','DELICIOS','EATING','FOOD'];
                            foreach ($tags as $key => $value) {
                                echo '<p>#'.$value.'</p>';
                            }
                        ?>
                    </div>
                </div>
                <div class = 'calend'>
                    <div class = 'void'>
                    </div>
                    <div class = 'meny_side_rep1'>
                        <p>Calendar</p>
                    </div>
                    <hr class = 'smal_hr2'>
                </div>
            </div>
            <div class = 'timeline'>
                <div class = 'void'>
                </div>
                <div class = 'meny_side_rep'>
                    <p>Timeline</p>
                    <div class = 'icon_sidebar'>
          	    </div>
                </div>
                <hr class = 'smal_hr2'>
                <div class = 'target_res'>
                    <p>Time line</p>
                </div>
                <div class = 'timeline_big_block'>
                    <div class = 'timeline_block_one'>
                        <p class = 'time_type'>EASY</p>
                        <div class = 'timeline_smal_block'>
                            <p>15mins</p>
                   	    <div class = 'timeline_block_block_easy'>
                   	    </div>
                        </div>
                    </div>
                    <div class = 'timeline_block_one'>
                        <p class = 'time_type'>MIDDLE</p>
                        <div class = 'timeline_smal_block'>
                            <p>25mins</p>
                            <div class = 'timeline_block_block_middle'>
                   	    </div>
                        </div>
                    </div>
                    <div class = 'timeline_block_one'>
                        <p class = 'time_type'>LONG</p>
                   	<div class = 'timeline_smal_block'>
                   		<p>40mins</p>
                        <div class = 'timeline_block_block_long'>
                   	    </div>
                   	</div>
                   </div>
                 </div>
                <hr id = 'smal_hr_timeline'>
                <div class = 'timeline_under_block'>
                    <p>Eam adhuc iudico percipitur ex, ut malis audire voluptaria has. </p>
              </div>
            </div>
      </div>
</div>