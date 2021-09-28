# symfony/messenger `#[AutoconfigureTag]`

`App\TestMessageHandler` as the `#[AutoconfiureTag]` attribute
adding the `from_transport` attribute. Which should resolve in
this message handler only running for `TestEvent` coming from this transport.

But the message handler is registered twice.
- For `TestEvent` from `test` transport
- And for every other transport the `TestEvent` is coming from

Changing the `services.yaml` to disable `autoconfigure` for this specific message
handler resolve the issue but the tag must be added in the `services.yaml` and attribute
will be ignored.
