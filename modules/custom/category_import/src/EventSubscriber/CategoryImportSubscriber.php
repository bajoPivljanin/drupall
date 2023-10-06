<?php

namespace Drupal\category_import\EventSubscriber;

use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * category_import event subscriber.
 */
class CategoryImportSubscriber implements EventSubscriberInterface {

  /**
   * The messenger.
   *
   * @var MessengerInterface
   */
  protected MessengerInterface $messenger;

  /**
   * Constructs event subscriber.
   *
   * @param MessengerInterface $messenger
   *   The messenger.
   */
  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  /**
   * Kernel request event handler.
   *
   * @param RequestEvent $event
   *   Response event.
   */
  public function onKernelRequest(RequestEvent $event) {
  }

  /**
   * Kernel response event handler.
   *
   * @param ResponseEvent $event
   *   Response event.
   */
  public function onKernelResponse(ResponseEvent $event) {
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [
      KernelEvents::REQUEST => ['onKernelRequest'],
      KernelEvents::RESPONSE => ['onKernelResponse'],
    ];
  }

}
