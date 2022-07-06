<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    #[Route('/planlos', name: 'planlos_dashboard')]
    public function index(): Response
    {
        return $this->render('@EasyAdmin/page/content.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle($this->getParameter('cms-name'));
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToCrud('Events', 'fa fa-calendar', Event::class),
            MenuItem::linkToCrud('User', 'fa fa-user', User::class),
        ];
    }

    /**
     * @var User $user
     */
    public function configureUserMenu(UserInterface $user): UserMenu
    {
        $role = 'User';

        if ($user->hasRole('ROLE_TEAM')) {
            $role = 'Team';
        }

        return UserMenu::new()
            ->setName(sprintf('%s (%s)', $user->getUsername(), $role))
            ->addMenuItems([
                MenuItem::linkToLogout('Logout', 'fa fa-sign-out')
            ]);
    }
}
