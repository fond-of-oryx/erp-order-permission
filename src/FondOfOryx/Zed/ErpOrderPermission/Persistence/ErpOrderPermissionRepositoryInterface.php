<?php

namespace FondOfOryx\Zed\ErpOrderPermission\Persistence;

use Generated\Shared\Transfer\CompanyBusinessUnitUuidCollectionTransfer;

interface ErpOrderPermissionRepositoryInterface
{
    /**
     * @param string $permissionKey
     * @param string $customerReference
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitUuidCollectionTransfer
     */
    public function getAccessibleCompanyBusinessUnitUuidsByPermissionKeyAndCustomerReference(
        string $permissionKey,
        string $customerReference
    ): CompanyBusinessUnitUuidCollectionTransfer;
}
