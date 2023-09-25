<?php

namespace TomorrowIdeas\Plaid\Entities;

class UserAuth
{
	protected bool $auth_type_select_enabled;
	protected bool $automated_microdeposits_enabled;
	protected bool $instant_match_enabled;
	protected bool $same_day_microdeposits_enabled;
	protected string $reroute_to_credentials;


	public function __construct(
		bool $auth_type_select_enabled = false,
		bool $automated_microdeposits_enabled = false,
		bool $instant_match_enabled = false,
		bool $same_day_microdeposits_enabled = false,
		string $reroute_to_credentials = 'OPTIONAL',
	) {
		$this->auth_type_select_enabled = $auth_type_select_enabled;
		$this->automated_microdeposits_enabled = $automated_microdeposits_enabled;
		$this->instant_match_enabled = $instant_match_enabled;
		$this->same_day_microdeposits_enabled = $same_day_microdeposits_enabled;
		$this->reroute_to_credentials = $reroute_to_credentials;
	}

	public function toArray(): array
	{
		return [
			'auth_type_select_enabled' => $this->auth_type_select_enabled,
			'automated_microdeposits_enabled' => $this->automated_microdeposits_enabled,
			'instant_match_enabled' => $this->instant_match_enabled,
			'same_day_microdeposits_enabled' => $this->same_day_microdeposits_enabled,
			'reroute_to_credentials' => $this->reroute_to_credentials,
		];
	}
}