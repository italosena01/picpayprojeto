# picpayprojeto
api e cadastro de Eletrodomésticos



Route::post('cadastrarnovo', [ CaracteristicaController::class, 'cadastrar']); 
- Cadastra novos itens ao banco.
- Insere "nome", "descricao", "marca" e "tensao", sendo nome e marcas obrigatórios.
- Os dados são retornados em forma de lista na página


*


Route::get('/caracteristicas/{id}', [CaracteristicaController::class, 'apagar' ])->name ('caracteristicas-deletar');
- Deleta item do banco
- O id referente ao produto cadastrado é apagado do banco.


*


Route::get('/caracteristicas/editar/{id}', [CaracteristicaController::class, 'edit'])->name('caracteristicas-editar');
- Edita itens do banco
- edita "nome", "descricao", "marca" e "tensao" inseridos no banco.


*

Route::post('/caracteristicas/atualizar',[ CaracteristicaController::class, 'atualizar']);
- Atualiza itens editados
- Atualiza "nome", "descricao", "marca" e "tensao" alterados no editar


*

Route::get('/caracteristicas',[ CaracteristicaController::class, 'index']);
- Direciona para o Index da página.






