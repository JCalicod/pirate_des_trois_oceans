<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/07/2020
 * Time: 13:03
 */

namespace App\Service;


class PaginatorServices
{
    private $page = 1;
    private $error = null;

    /**
     * @param string $error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param array $data
     * @param int $page
     * @param int $nb_to_display
     * @return array
     */
    public function paginate(array $data, int $page, int $nb_to_display): array
    {
        $current_data = [];
        if ($page == 1) {
            $current_data = array_slice($data, 0, $nb_to_display);
        }
        else if ($page > 1) {
            $nb_elements = count($data);
            if ($nb_elements >= $nb_to_display) {
                if ($nb_elements >= ($page - 1) * $nb_to_display) {
                    $current_data = array_slice($data, ($page - 1) * $nb_to_display, $nb_to_display);
                }
                else {
                    $this->setError('Il n\'y a aucune donnée à afficher sur cette page.');
                }
            }
            else {
                $this->setError('Le nombre d\'éléments demandé est supérieur au nombre d\'élements total.');
            }
        }
        else {
            $this->setError('Il n\'y a aucune donnée à afficher sur cette page.');
        }
        return $current_data;
    }
}