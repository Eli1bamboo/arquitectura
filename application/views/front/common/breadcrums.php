				<ol class="breadcrumb">
                    <li>
                        <a href="<?= base_url();?>home">Inicio</a>
                    </li>
                    <?
                    	if ($this->uri->segment(1) == "portfolio") {
                    		?>
                    		<li>
                        	   <a href="<?= base_url();?>todas">Portfolio</a>
                    		</li>
                  			<li class="active"><?php echo ucfirst($this->uri->segment(2)); ?></li>
                    		<?
                    	} elseif ($this->data['section'] == 'obra'){
                            ?>
                            <li>
                                <a href="<?= base_url();?>todas">Portfolio</a>
                            </li>
                            <li>
                                <a href="<?= base_url();?>portfolio/<?= $this->portfolio_model->category?>"><?= ucfirst($this->portfolio_model->category)?></a>
                            </li>
                            <li class="active">
                                <?= $this->portfolio_model->name?>
                            </li>
                            <?
                        }elseif ($this->data['section'] == 'noticia') {
                            ?>
                            <li>
                                <a href="<?= base_url();?>prensa">Prensa</a>
                            </li>
                            <li class="active">
                                <?= $this->prensa_model->name?>
                            </li>
                            <?
                        } else{
                    		?>
                    			<li class="active"><?php echo ucfirst($this->uri->segment(1)); ?></li>
                    		<?
                    	}
                    ?>
                </ol>