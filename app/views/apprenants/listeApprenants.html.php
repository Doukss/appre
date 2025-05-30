<div class="p-6 bg-[#F9EFEF] rounded-xl">
        <div class="flex justify-between items-center mb-2">
          <h1 class="text-2xl font-bold text-[#F9CF98]">Apprenants</h1>
          <div class="dropdown ml-96 ">
            <div tabindex="0" role="button" class="btn m-1 bg-gray-900 text-white">Télécharger la liste<i class="ri-file-download-line"></i></div>
              <ul tabindex="0" class="dropdown-content menu bg-base-100 z-1 w-52 p-2">
              <li><a>Item 1</a></li>
              <li><a>Item 2</a></li>
              </ul>
            </div> 
          <button id="btn-ajout-promotion" class="bg-red-600 text-[#F9CF98] px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-red-800 transition">
            <i class="ri-add-line"></i> Ajouter apprenant
          </button>
        </div>
           <p class="text-sm text-gray-500 text-center rounded-full mb-4 bg-gray-100 w-[12%]">200 apprenants</p>

          <div class="flex">
              <form action="">
                  <input type="text" class="shadow-md bg-white p-2"  placeholder="Rechercher..."> 
                  <select name="" id="" class="shadow-md bg-white p-2 w-48">
                      <option value="">Filtre par classe</option>
                      
                  </select>          
                  <select name="" id="" class="shadow-md bg-white p-2 w-48">
                    <option>Filtre par statut</option>

                  </select>          
              </form>  
          </div>

    <div class="border-t border-gray-200 my-6"></div>

    <!-- Liste des retenues -->
    <div class="mb-8">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-[#F9CF98] text-[#87520E]">
                        <th class="py-2 px-4 border-b">Photo</th>
                        <th class="py-2 px-4 border-b">Matricule</th>
                        <th class="py-2 px-4 border-b">Nom</th>
                        <th class="py-2 px-4 border-b">Prenom</th>
                        <th class="py-2 px-4 border-b">Adresse</th>
                        <th class="py-2 px-4 border-b">Téléphone</th>
                        <th class="py-2 px-4 border-b">classes</th>
                        <th class="py-2 px-4 border-b">Statut</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($apprenants as $apprenant): ?>
                        <tr class="text-gray-500 hover:bg-gray-100 ">
                            <td class="py-2 px-4 border-b">
                                <?php if (!empty($apprenant['photo'])): ?>
                                    <img src="data:image/jpeg;base64,<?= base64_encode($apprenant['photo']) ?>" alt="Photo" width="40" height="40">
                                <?php else: ?>
                                    <span>Aucune</span>
                                <?php endif; ?>
                            </td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($apprenant['matricule']) ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($apprenant['nom']) ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($apprenant['prenom']) ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($apprenant['adresse'] ?? '') ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($apprenant['telephone'] ?? '') ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($apprenant['classe'] ?? '') ?></td>
                            <td>
                              <span class="badge badge-<?= $apprenant['statut'] === 'Actif' ? 'success' : 'error' ?>">
                                <?= htmlspecialchars($apprenant['statut']) ?>
                              </span>
                            </td>
                            <td>
                      <div class="flex space-x-2">
                        <a href="?controllers=apprenant&page=details&id=<?= $apprenant['id'] ?>" 
                           class="btn btn-sm btn-info" title="Voir les détails">
                          <i class="ri-eye-line"></i>
                        </a>
                        <a href="?controllers=apprenant&page=changerStatut&id=<?= $apprenant['id'] ?>" 
                           class="btn btn-sm <?= $apprenant['statut'] === 'Actif' ? 'btn-error' : 'btn-success' ?>" 
                           title="<?= $apprenant['statut'] === 'Actif' ? 'Désactiver' : 'Activer' ?>">
                          <i class="ri-<?= $apprenant['statut'] === 'Actif' ? 'close-circle-line' : 'check-circle-line' ?>"></i>
                        </a>
                      </div>
                    </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="border-t border-gray-200 my-6"></div>

    
</div>